<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <title>Laravel Blog | @yield('title')</title>
    
    <link  href="https://unpkg.com/survey-core/defaultV2.min.css" type="text/css" rel="stylesheet">
  <script src="https://unpkg.com/survey-core/survey.core.min.js"></script>
  <script src="https://unpkg.com/survey-js-ui/survey-js-ui.min.js"></script>

  <link  href="https://unpkg.com/survey-creator-core/survey-creator-core.min.css" type="text/css" rel="stylesheet">
  <script src="https://unpkg.com/survey-creator-core/survey-creator-core.min.js"></script>
  <script src="https://unpkg.com/survey-creator-js/survey-creator-js.min.js"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="/js/survey.js"></script>
</head>
<body>
  @yield('content')
</body>
</html>