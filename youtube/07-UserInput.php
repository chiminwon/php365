<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="07-UserInput.php" method="get">
    Name:<input type="text" name="name">
    <input type="submit">
</form>
<br/>
<?php
echo $_GET["name"]
?>
</body>
</html>
