<!DOCTYPE html>
<html lang="en">
<head>
  <title>Choice</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
</head>
<body>
<script type="text/javascript">
(function(window, location) {
    history.replaceState(null, document.title, location.pathname+"#!/stealingyourhistory");
    history.pushState(null, document.title, location.pathname);

    window.addEventListener("popstate", function() {
      if(location.hash === "#!/stealingyourhistory") {
            history.replaceState(null, document.title, location.pathname);
            setTimeout(function(){
              location.replace("signin.php");
            },0);
      }
    }, false);
}(window, location));
</script>
<a href="cultural_portal1.php">CULTURAL PORTAL</a><br><br><br>
<a href="sports_portal1.php">SPORTS PORTAL</a>

</body>
</html>