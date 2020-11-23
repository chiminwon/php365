<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<?php

class Chef
{
    function makeChicken()
    {
        print "The Chef make Chicken";
    }

    function makeSalad()
    {
        print "The Chef make alad";
    }

    function makeSpecialDish()
    {
        print "The Chef make Special Dish";
    }
}

class ItalianChef extends Chef
{
    function makePasta()
    {
        echo "The Italian Chef make makePasta!";
    }

    function makeSpecialDish()
    {
        echo "The Italian Chef make Special Dish!";
    }
}

$chef = new Chef();
$chef->makeChicken();

$italianChef = new ItalianChef();
$italianChef->makePasta();
?>
</body>
</html>
