<? require("requires/connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Website</title> 
    <link href="./Content/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./Content/css/custom/site.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  
    <?php
	include ('include/head.php');
	
	?>
      
    <br/>
 <div class="container bg-light" style ="height:600px">
<div class="product_detail_box">
  <div class="container">
    <h2  style="text-align: center ;"><b>P R O D U C T___D E T A I L</b></h2></br>
    <div class="row">
	


<?php

require("requires/connection.php");
if($_GET){
  $id = $_GET['id'];

$query = "SELECT * FROM tblproducts WHERE productId='$id' ";

$result = mysqli_query($dbcon,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $name = $row['productName'];
    $detail = $row['productDetails'];
	
    $image = $row['pimage'];
    $price = $row['productPrice'];
    $size = $row['productSize'];
    $stock = $row['productStock'];
?>
      <div class="row">
        <img src="Assets/Images/<?php echo $image; ?>" alt="product" style="width: 300px; height: 400px">
     
      <div class="col">
        <h2><?php echo $name; ?></h2>
      <span><b>Discount</b> : 10%</span><br><br>
        <span><b>Price</b> : <?php echo $price; ?>Rs</span><br><br>
		 <span><b>Detail</b> : <?php echo $detail; ?></span><br><br>
        <span><b>Availability:</b> <?php echo $stock; ?></span><br><br>
        <span><b>Size:</b>  <?php echo $size; ?></span><br></br>
        <button type="button" name="addCart" class="btn  btn-secondary">Add to Cart</button>
      </div>
<?php }}} ?>


    </div>
  </div>
</div></div></div>

    <?php
	include ('include/foot.php');
	?>
      
      
</body>
<script src="./Content/js/bootstrap.min.js"></script>
</html>

<? mysql_close($connection); ?>





