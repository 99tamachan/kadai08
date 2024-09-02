<?php

include("funcs.php");

$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$group = $_POST["group"];
$point = $_POST["point"];

// 作成日時,名前,メールアドレス,年齢,性別,睡眠時間
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$group.",".$point.",";
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>好きなKPOPアンケート</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>推しグルの回答ありがとう！</h1>
<h2 class="center">これからもKPOPをよろしくね</h2>

<a href="index.php">戻る</a></li>

</body>
</html>