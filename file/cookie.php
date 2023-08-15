<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Last visit using Cookies</title>
</head>
<!-- blender guru to learn blender -->
<body>
  <h1>Web Programming Lab</h1>
  <p>Welcome to web programming lab</p>
  <p style="color: blue;">
    <?php
    date_default_timezone_set("Asia/Kolkata");

    $two_months = 60 * 60 * 24 * 60 + time();


    setcookie("lastvisit", date("G:i - m/d/y", $two_months));

    if (isset($_COOKIE["lastvisit"])) {
      $visit = $_COOKIE["lastvisit"];
      echo "Last Visited On: ",  $visit;
    } else {
      echo "You have got some old cookie.";
    }

    ?>
  </p>
</body>

</html>