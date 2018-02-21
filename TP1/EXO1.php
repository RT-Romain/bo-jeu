<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<a href="EXO1.php?'message'=Hello">Afficher Hello</a>
<?php
echo("Hello world !");
$message = $_GET["message"];
echo($message)
?>
</body>
</html>