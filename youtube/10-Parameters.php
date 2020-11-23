<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="10-Parameters.php" method="get">
    Name:<input type="text" name="name"> <br>
    <input type="submit"> <br>
</form>
<?php
$name = $_GET["name"];

echo $name;
?>
</body>
</html>
