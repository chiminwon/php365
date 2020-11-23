<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="11-PostAndGet.php" method="post">
    Password:<input type="text" name="password"> <br>
    <input type="submit"> <br>
</form>
<?php
$password = $_POST["password"];

echo  $password;
?>
</body>
</html>
