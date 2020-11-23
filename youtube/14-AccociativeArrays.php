<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="14-AccociativeArrays.php" method="post">
    Name:<input type="text" name="name"> <br>
    <input type="submit"> <br>
</form>
<?php
$grades = array("Jim" => "A+", "Taylor" => "C+", "Oscar" => "B+");
$grades["Jim"] = "F";
echo $grades["Jim"];
echo $grades[$name];
?>
</body>
</html>
