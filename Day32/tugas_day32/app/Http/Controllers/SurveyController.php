<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\Auth;
use App\Models\SurveyResponse;

class SurveyController extends Controller
{

    public function __construct()
    {
        $this->footer = Footer::select('konten')->first();
    }
    
    public function index() {
        return view('admin.survey.index');
    }

    public function response(Request $request)
    {
        $footer = $this->footer;
        $searchTerm = $request->get('search');

        // Query untuk mendapatkan responses berdasarkan pencarian
        $responses = SurveyResponse::when($searchTerm, function ($query, $searchTerm) {
            return $query->where('name', 'like', '%' . $searchTerm . '%')
                        ->orWhere('responses', 'like', '%' . $searchTerm . '%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10); // Batasi 10 data per halaman

        // Kirim data ke view, termasuk variabel pencarian
        return view('admin.survey.response', compact('responses', 'searchTerm', 'footer'));
    }

    
    public function store(Request $request)
    {
        
        $surveyData = $request->all();

        Survey::create([
            'survey_data' => json_encode($surveyData),
        ]);

        return response()->json(['message' => 'Survey submitted successfully']);
    }

    public function load() {
        $survey = Survey::latest()->first();

        if ($survey) {
            return response()->json([
                'surveyData' => json_decode($survey->survey_data)
            ]);
        }

        return response()->json([
            'surveyData' => null
        ]);
    }

    public function getSurvey() {

        $survey = Survey::latest()->first();
        
        if (!$survey) {
            return response()->json(['error' => 'Survey not found'], 404);
        }
    
        return response()->json([
            'survey_data' => json_decode($survey->survey_data)
        ]);
    }

    public function formSurvey() {
        return view('survey.index');
    }

    public function postSurvey(Request $request)
    {
        $userName = Auth::check() ? Auth::user()->name : 'anonymous';

        $validated = $request->validate([
            'responses' => 'required|array',
        ]);

        $response = SurveyResponse::create([
            'name' => $userName,
            'responses' => json_encode($validated['responses']),
        ]);

        return response()->json([
            'message' => 'Survey response saved successfully!',
            'data' => $response
        ], 200);
    }
}
