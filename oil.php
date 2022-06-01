<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Oil</title>
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

<body bgcolor="#EDEDED">
<ol start="1"></br>
<h3><span style="background-color: #B5B5B5;"><b>各國石油生產量</b></span> </h3>
<p>統計kaggle每年對各國石油產及生產量，</p>

<hr>

</br>


<table class="table-responsive align-middle mb-0 bgcolor=black cellpadding=5 border=1">
  <thead class="bg-info">
    <tr>
<?php
$records_per_page = 10;
if (isset($_GET['page'])){
 $page = $_GET['page'];
}else{
 $page = 1;
}

$link = mysqli_connect("localhost:3307",'root','','finaldatabase');

$sql= "SELECT * FROM oil";

if ($result=mysqli_query($link,$sql)) {
  $total_fields=mysqli_num_fields($result);
  $total_records=mysqli_num_rows($result);
  $total_pages=ceil($total_records / $records_per_page);
  $offset = ($page - 1)*$records_per_page;
  mysqli_data_seek($result, $offset);

  print('總筆數:'.$total_records);
  while ( $meta=mysqli_fetch_field($result) ) {
   echo "<td bgcolor=#00B2B2>". $meta->name ."</td>";
  }
 $j = 1;
 while ($rows = mysqli_fetch_array($result, MYSQLI_NUM) and $j <= $records_per_page ) {
  echo "<tr>";
  for ( $i = 0; $i<= $total_fields-1; $i++ )
   echo "<td bgcolor=white>".$rows[$i]."</td>";
  echo "</tr>";
  $j++; }
 echo "</table><br>";
 if ( $page > 1 )
  echo "<a href='oil.php?page=".($page-1).
           "'>上一頁</a>| ";
 for ( $i = 1; $i <= $total_pages; $i++ )
  if ($i != $page)
   echo "<a href=\"oil.php?page=".$i."\">".
           $i."</a> ";
  else
   echo $i." ";

 if ( $page < $total_pages )
  echo "|<a href='oil.php?page=".($page+1).
          "'>下一頁</a> ";
}
mysqli_free_result($result);
mysqli_close($link);


?>
<hr>
<h3>資料來源:</h3>
<a href="https://www.kaggle.com/datasets/mathurinache/crudeoilproductionbycountry">Crude Oil Production by Country</a>
</body>
</html>
