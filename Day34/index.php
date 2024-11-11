<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm RPG - auto farm</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
  <script>
    $(document).ready(() => {
      function autoFarm() {
        request = $.ajax({
          type: "GET",
          dataType: "json",
          url: "farm.php",
          contentType: "application/json; charset=utf-8",
          data: {},
          success: response => {
            console.log(response);
            setTimeout(autoFarm, 61000);
          },
          error: e => {
            console.log(e);
          }
        });
      }
      autoFarm();
    });
  </script>
</body>
</html>