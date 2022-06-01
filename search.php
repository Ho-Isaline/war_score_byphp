<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOT WAR SCORE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-info">
			<div class="container">
					<a href="index.php" class="navbar-brand">Hot War Score</a>
					<form class="form-inline" name = "search" onsubmit = "return validateForm()" method = "post" action = "search.php">
							<input class="form-control mr-sm-2" name = "country" type="text" placeholder="Country" aria-label="Search">
							 <button class="btn btn-outline-light my-2 my-sm-0" type="submit">search</button>
					</form>
			</div>
	</nav>
<?php
$search=$_POST['country'];
// 1.建立MySQL的資料庫連接
$link = @mysqli_connect(
            'localhost:3307',  // MySQL主機名稱
            'root',       // 使用者名稱
            '',  // 密碼
            'finaldatabase');  // 預設使用的資料庫名稱
if ( !$link ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
else {
   //echo "MySQL資料庫連接成功!<br/>";
}

//開啟資料庫與否

$dbname="finaldatabase";
if ( !mysqli_select_db($link, $dbname) )
	die("無法開啟 $dbname 資料庫!<br/>");
else
	//echo "資料庫: $dbname 開啟成功!<br/>";

// sql語法存在變數中
$sql = "SELECT * FROM finaldatabase.all where Country like '%$search%'";

//用mysqli_query方法執行(sql語法)將結果存在變數中

// 2.獲得資料
$result = mysqli_query($link,$sql) or die("Error");

$total_fields=mysqli_num_fields($result);
$total_records=mysqli_num_rows($result);
print('總筆數:'.$total_records);
?>

<table class="table align-middle mb-0 bg-white">

<thead class="bg-light">
<tr>
<?php
while ( $meta = mysqli_fetch_field($result))
	echo "<th scope='col'> " . $meta->name . "</th>";
	echo"</tr>";
?>
</tr>
</thead>
<tbody>
<?php
//取得爛位數
$total_fields= mysqli_num_fields($result);
//顯示每一筆紀錄
while ($row=mysqli_fetch_row($result)) {
	echo"<tr>";
	for ($i=0; $i <=$total_fields-1 ; $i++)

		echo "<th scope='row'>".$row[$i]."</th>";
    echo"</tr>";
}


?>

</tbody>
<?php
mysqli_free_result($result);
 mysqli_close($link);

?>

</body>
</html>
