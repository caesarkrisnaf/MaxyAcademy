@extends('survey.layout.app')
@push('meta')
<meta name="description" content="Survey temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT">
<meta name="author" content="Caesar Krisna">
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="http://localhost:8000/upload/logo/logo.png" />
<meta property="og:description" content="Survey temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT" />
<meta property="og:site_name" content="Laravel Blog" />
<meta name="robots" content="noindex,nofollow" />
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
@endpush
@section('title', "Survey")

@section('content')
<div id="surveyContainer"></div>

<script>
    $(document).ready(function() {
      
        fetch(`/survey/form/load`)
            .then(response => response.json())
            .then(data => {
              const sd = data.survey_data;
              let questions = [];
              sd.pages[0].elements.forEach(element => {
                questions.push(element);
              });
                if (data.survey_data) {
                    const surveyJSON = {
                      title: sd.title,
                      description: sd.description,
                      questions: questions
                    }; 
                    

                    const survey = new Survey.Model(surveyJSON);

                    survey.render(document.getElementById('surveyContainer'));

                    survey.onComplete.add(function(result) {
                      console.log("Survey Results: ", result.data);

                      fetch('/survey/form/save', {
                          method: 'POST',
                          headers: {
                              'Content-Type': 'application/json',
                              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                          },
                          body: JSON.stringify({
                              responses: result.data
                          })
                      })
                      .then(response => response.json())
                      .then(data => {
                          console.log("Survey response saved:", data);
                          alert("Thank you for completing the survey!");
                      })
                      .catch(error => {
                          console.error("Error saving survey response:", error);
                          alert("An error occurred while saving your survey response.");
                      });
                    }); 
                } else {
                    alert("Survey not found");
                }
            });
    });
</script>

@endsection
