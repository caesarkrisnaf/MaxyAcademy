@extends('survey.layout.app')
@push('meta')
  <meta property="og:url" content="{{ url()->current() }}" />
@endpush
@section('title', "Survey Creator")

@section('content')
  <div id="surveyCreator" style="height: 100vh;"></div>

  <script>
    const creatorOptions = {
      showLogicTab: true,
      isAutoSave: true
    };

    const creator = new SurveyCreator.SurveyCreator(creatorOptions);

    document.addEventListener("DOMContentLoaded", function() {
        creator.render(document.getElementById("surveyCreator"));
    });

    creator.saveSurveyFunc = (saveNo, callback) => {
    window.localStorage.setItem("survey-json", creator.text);
    callback(saveNo, true);

    saveSurveyJson(
          "/survey/save",
          creator.JSON,
          saveNo,
          callback
      );
    };

    function saveSurveyJson(url, json, saveNo, callback) {
      var token = $('meta[name="csrf-token"]').attr('content');
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json;charset=UTF-8',
          'X-CSRF-TOKEN': token
        },
        body: JSON.stringify(json)
      })
      .then(response => {
        if (response.ok) {
          callback(saveNo, true);
        } else {
          callback(saveNo, false);
        }
      })
      .catch(error => {
        callback(saveNo, false);
      });
    }

    function loadSurveyFromServer() {
    fetch('/survey/load')
        .then(response => response.json())
        .then(data => {
            if (data.surveyData) {
                const surveyJsonString = JSON.stringify(data.surveyData);
                creator.text = surveyJsonString;
            } else {
                alert("No survey data found.");
            }
        })
        .catch(error => {
            console.error('Error loading survey:', error);
        });
      }

      loadSurveyFromServer();
    
  </script>
@endsection