<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Nuclear Power</title>
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
<h3><span style="background-color: #B5B5B5;"><b>各國核武器數量</b></span> </h3>
<p>統計各國核武器數量及統計年分，</p>

<hr>

</br>


<table class="table align-middle mb-0 bgcolor=black cellpadding=5 border=1">
  <thead class="bg-info">
    <tr>
<?php
$link = mysqli_connect("localhost:3307",'root','','finaldatabase');

$sql= "SELECT * FROM nuclear_power";

if ($result=mysqli_query($link,$sql)) {
  $total_fields=mysqli_num_fields($result);
  $total_records=mysqli_num_rows($result);

  print('總筆數:'.$total_records);
  while ( $meta=mysqli_fetch_field($result) ) {
   echo "<td bgcolor=#00B2B2>". $meta->name ."</td>";
  }
  while ($row=mysqli_fetch_row($result)) {
  	echo"<tr>";
  	for ($i=0; $i <=$total_fields-1 ; $i++)

  		echo "<th scope='row'>".$row[$i]."</th>";
      echo"</tr>";
  }
}
mysqli_free_result($result);
mysqli_close($link);


?>
<hr>
<h3>資料來源:</h3>
<a href="https://worldpopulationreview.com/country-rankings/countries-with-nuclear-weapons">Countries With Nuclear Weapons 2022</a>
</body>
</html>
