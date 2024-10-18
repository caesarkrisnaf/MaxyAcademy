<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\models\PurchaseCycle;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SalePurchaseCycleController extends Controller
{
    public function GetSalesList() {
        $sales = Sale::paginate(10);
        return view('admin.sales.index', compact('sales'));
    }

    public function GetSaleCreate() {
        $cycles = PurchaseCycle::all();
        return view('admin.sales.create', compact('cycles'));
    }

    public function CreateSaleData(Request $request) {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'purchase_cycle_id' => 'nullable|exists:purchase_cycles,id', // Ensure the cycle exists if provided
        ]);
    
        // Create a new sale instance and save it to the database
        try {
            Sale::create([
                'product_name' => $request->product_name,
                'amount' => $request->amount,
                'purchase_cycle_id' => $request->purchase_cycle_id,
            ]);
    
            // Flash success message and redirect to index page
            return redirect()->route('admin.sales')->with('success', __('messages.sales.created_successfully'));
        } catch (\Exception $e) {
            // Flash error message in case of failure
            return redirect()->route('admin.sales')->with('error', __('messages.sales.creation_failed'));
        }
    }
    
    public function GetSaleDetail(Sale $sale) {
        $sale = $sale;
        return view('admin.sales.show', compact('sale'));
    }
    
    public function GetSaleEdit(Sale $sale) {
        $sale = $sale;
        $cycles = PurchaseCycle::all();
        return view('admin.sales.edit', compact('sale', 'cycles'));
    }

    public function UpdateSaleData(Request $request, Sale $sale) {
        // Validate the incoming request data
        $request->validate([
            'product_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'purchase_cycle_id' => 'nullable|exists:purchase_cycles,id', // Ensure the cycle exists if provided
        ]);

        // Find the sale by ID
        $sale = $sale;

        // Attempt to update the sale
        try {
            $sale->update([
                'product_name' => $request->product_name,
                'amount' => $request->amount,
                'purchase_cycle_id' => $request->purchase_cycle_id,
            ]);

            // Flash success message and redirect to index page
            return redirect()->route('admin.sales')->with('success', __('messages.sales.updated_successfully'));
        } catch (\Exception $e) {
            // Flash error message in case of failure
            return redirect()->route('admin.sales')->with('error', __('messages.sales.update_failed'));
        }
    }

    public function DestroySale($id) {
        // Find the sale by ID
        $sale = Sale::findOrFail($id);

        // Attempt to delete the sale
        try {
            $sale->delete();
            
            // Flash success message to the session
            return redirect()->route('admin.sales')->with('success', __('messages.sales.deleted_successfully'));
        } catch (\Exception $e) {
            // Flash error message to the session in case of failure
            return redirect()->route('admin.sales')->with('error', __('messages.sales.delete_failed'));
        }
    }
    
    public function GetCyclesList() {
        $cycles = PurchaseCycle::paginate(10);
        return view('admin.cycles.index', compact('cycles'));
    }

    public function GetCycleCreate() {
        return view('admin.cycles.create');
    }

    public function CreateCycleData(Request $request) {
        $request->validate([
            'cycle_name' => 'required|string|max:255',
        ]);
    
        try {
            PurchaseCycle::create([
                'cycle_name' => $request->cycle_name,
            ]);
    
            // Flash success message and redirect to index page
            return redirect()->route('admin.cycles')->with('success', __('messages.cycles.created_successfully'));
        } catch (\Exception $e) {
            // Flash error message in case of failure
            return redirect()->route('admin.cycles')->with('error', __('messages.cycles.creation_failed'));
        }
    }

    public function GetCycleDetail(PurchaseCycle $cycle) {
        $cycle = $cycle;
        return view('admin.cycles.show', compact('cycle'));
    }

    public function GetCycleEdit(PurchaseCycle $cycle) {
        $cycle = $cycle;
        return view('admin.cycles.edit', compact('cycle'));
    }

    public function UpdateCycleData(Request $request, PurchaseCycle $cycle) {
        // Validate the incoming request data
        $request->validate([
            'cycle_name' => 'required|string|max:255',
        ]);

        // Find the sale by ID
        $cycle = $cycle;

        // Attempt to update the sale
        try {
            $cycle->update([
                'cycle_name' => $request->cycle_name,
            ]);

            // Flash success message and redirect to index page
            return redirect()->route('admin.cycles')->with('success', __('messages.cycles.updated_successfully'));
        } catch (\Exception $e) {
            // Flash error message in case of failure
            return redirect()->route('admin.cycles')->with('error', __('messages.cycles.update_failed'));
        }
    }

    public function DestroyCycle($id) {

        // Find the sale by ID
        $cycle = PurchaseCycle::findOrFail($id);

        // Attempt to delete the sale
        try {
            $cycle->delete();
            
            // Flash success message to the session
            return redirect()->route('admin.cycles')->with('success', __('messages.cycles.deleted_successfully'));
        } catch (\Exception $e) {
            // Flash error message to the session in case of failure
            return redirect()->route('admin.cycles')->with('error', __('messages.cycles.delete_failed'));
        }   
    }
}
