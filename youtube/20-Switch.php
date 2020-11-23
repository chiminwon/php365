<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="19-BetterCalculator.php" method="post">
    Grade:<input type="text" name="grade"> <br>
    <input type="submit">
    <br>
</form>
<?php echo
$grade = $_POST["grade"];
echo $grade;
switch ($grade) {
    case "A":
        echo "You did amazing";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did worse";
        break;
    default:
        echo "Invalid Grade";
        break;
}
?>
</body>
</html>
