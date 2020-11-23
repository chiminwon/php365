<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<form action="15-Functions.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
    <input type="submit"> <br>
</form>
<?php
function sayHello($name)
{
    echo "Hello $name <br>";
}

sayHello("Tom");
sayHello("Summy");
sayHello("Jack");
?>
</body>
</html>
