<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="19-BetterCalculator.php" method="post">
    Num1:<input type="number" step="0.1" name="num1"> <br>
    Operator:<input type="text" name="op"> <br>
    Num2:<input type="number" name="num2"> <br>
    <input type="submit">
    <br>
</form>
<?php echo
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];
if ($op == "+") {
    echo $num1 + $num2;
} elseif ($op == "-") {
    echo $num1 - $num2;
} elseif ($op == "/") {
    echo $num1 / $num2;
} elseif ($op == "*") {
    echo $num1 * $num2;
}
?>
</body>
</html>
