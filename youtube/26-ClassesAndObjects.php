<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<?php

// 类
class Book
{
    var $title;
    var $author;
    var $pages;
}

// 实例
$book = new Book();
$book->title = "Harry Potter";
$book->author = "JK Rolling";
$book->pages = 400;

$book2 = new Book();
$book2->title = "Lord Of the Rings";
$book2->author = "Tolkien";
$book2->pages = 440;

echo $book1->author;
?>
</body>
</html>
