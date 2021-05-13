<!DOCTYPE html>
<html>
<head>
    <title>PC Builder Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/legoscript.js"></script>
    <script src="js/arvutikomponendidscript.js"></script>
 
</head>
<body>
<?php
include ('header.php');
?>
<?php
include ('navigation.php');
?>
<aside>
<p>Useful items!</p>
</aside>
<main>
<?php
if(isSet($_GET["leht"])){
    include('content/'.$_GET["leht"].'.php');
} else{
    include('content/_main.php');
}
?>
</main>
<?php
include ('footer.php');
?>
</body>
</html>