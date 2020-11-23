<html>
<head>
    <meta charset="utf-8">
    <title>ObjectFunctions.php</title>
</head>
<body>
<?php

// 类
class Student
{
    var $name;
    var $major;
    var $gpa;

    // 构造方法
    function __construct($name, $major, $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors()
    {
        print "call hasHonors function!!\n";
        print "<br>";
        if ($this->gpa >= 3.5) {
            return "true";
        }
        return "false";
    }
}

// 实例
$student1 = new Student("Harry", "IT", 3.9);
$student2 = new Student("Potter", "CS", 3.6);

echo $student1->hasHonors();
?>
</body>
</html>
