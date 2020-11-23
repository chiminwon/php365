<html>
<head>
	<meta charset = "utf-8">
	<title>Hello World</title>
</head>
<body>
	<?php
			$phrase = "Marine University";
			// 小写函数
			echo strtolower($phrase);
			// 大写函数
			echo strtoupper($phrase);
			//按索引位置打印字母
			echo $phrase[0];
			// $phrase[0] = "N"
			echo "Allen"[0];
			echo str_replace("Marine","Ocean",$phrase);
	?>
</body>
</html>
