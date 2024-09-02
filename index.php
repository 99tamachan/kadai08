<html>
<head>
<meta charset="utf-8">
<title>好きなKPOPアンケート</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>KPOPの推しグルを教えてね</h1>
<form action="write.php" method="post">
	<div class="Form">
	  <div class="Form-Item">
		<p class="Form-Item-Label">
		  <span class="Form-Item-Label-Required">必須</span>お名前
		</p>
		<input type="text" class="Form-Item-Input" placeholder="例）山田太郎" name="name" required>
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
		<input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com" name="mail" required>
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>年齢</p>
		<input type="number" class="Form-Item-Input" name="age" required>
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label">
		  <span class="Form-Item-Label-Required">必須</span>好きなグループ名
		</p>
		<input type="text" class="Form-Item-Input" placeholder="例）SEVENTEEN" name="group" required>
	  </div>
	  <div class="Form-Item">
		<p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>推しポイント</p>
		<!-- <input type="text" class="Form-Item-Input" name="impression" required> -->
		<textarea class="Form-Item-Textarea" name="point" required></textarea>
	  </div>
	  <input type="submit" class="Form-Btn" value="送信">
	</div>
</form>

<div class="center">
	<a href="read.php">集計結果を見る</a>
</div>

</body>
</html>