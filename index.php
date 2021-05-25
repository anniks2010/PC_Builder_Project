
<!DOCTYPE html>
<html>
<head>
    <title>PC Builder Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include ('navigation.php');
?>

<hr class="hr">

<main>
<?php
if(isSet($_GET["leht"])){
    include('content/'.$_GET["leht"].'.php');
} else{
    include('content/_main.php');
}
?>
</main>
<hr class="hr">
<?php
include ('footer.php');
?>
</body>
</html>