<html>
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>
<body>
<?php

// 类
class Movie
{
    public $title;
    var $rating;
//    private $rating;

    // 构造方法
    function __construct($title, $rating)
    {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating()
    {
        return $this->rating;
    }

    function setRating($rating)
    {
        if ($rating == "G" || $rating == "PG013") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

// 实例
$movie = new Movie("Avengers", "PG013");
$movie->rating = "Dog";
echo $movie->getRating();
?>
</body>
</html>
