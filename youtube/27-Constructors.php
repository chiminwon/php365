<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<?php

// 类
class BookA
{
    var $title;
    var $author;
    var $pages;

    // 构造方法
    function __construct($aTitle, $aAuthor, $aPages)
    {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
        echo "New book created <br>";
    }
}

// 实例
$booka = new BookA("Harry Potter", "Harry Potter", 400);

echo $booka->author;
?>
</body>
</html>
