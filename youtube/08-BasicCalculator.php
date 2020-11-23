<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="08-BasicCalculator.php" method="get">
    Num1:<input type="number" name="a1">
    <br>
    Num2:<input type="number" name="a2">
    <br>
    <input type="submit">
    <br>
</form>
Answer: <?php echo $_GET["a1"] + $_GET["a2"]; ?>
</body>
</html>
