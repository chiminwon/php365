<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<?php
function getMax($num1, $num2, $num3)
{
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}

echo getMax(230, 343, 34)
?>
</body>
</html>
