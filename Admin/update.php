<?php
session_start();
require("../requires/connection.php");

if(isset($_SESSION['username'])===false){
	header("location: Admin/index.php");
	die();
}

?>
<head>
    <meta charset="UTF-8">
    <title>My Website</title> 
    <link href="../Content/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Content/css/custom/site.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<?php
include ('../Include/header.php');

?>

<div id="dashboard" style="margin-left:50px">
 
<br><br>

<div id="Viewpages">
<?php
require("../requires/connection.php");



if($_GET){


$id = $_GET['Updateid'];

$query = "SELECT * FROM tblproducts WHERE productId='$id' ";
$result = mysqli_query($dbcon,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productId'];
    $name = $row['productName'];
    $price = $row['productPrice'];
    $code = $row['productCode'];
    $stock = $row['productStock'];
    $discount = $row['productDiscount'];
    $size = $row['productSize'];
    $detail = $row['productDetails'];
    $image = $row['pimage'];
    

?>

<form action="update.php?Updateid=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
      <b>New Product N</b>      <input type="text" class="designInput inputSpecial" name="pname" placeholder="Enter product name" value="<?php echo $name; ?>" required><br><br>
         <b>New Product P</b>    <input type="text" class="designInput inputSpecial" name="pprice" placeholder="Enter product price" value="<?php echo $price; ?>"><br><br>
           <b>New Product C </b>  <input type="text" class="designInput inputSpecial" name="pCode" placeholder="Enter product code" value="<?php echo $code; ?>"><br><br>
          <b>New Product S</b> <input type="text" class="designInput inputSpecial" name="psize" placeholder="Enter product Size" value="<?php echo $size; ?>"><br><br>
            <b>New Product A</b> <input type="text" class="designInput inputSpecial" name="pstock" placeholder="Enter product Stock" value="<?php echo $stock; ?>"><br><br>
            <b>New Product D</b>  <input type="text" class="designInput inputSpecial" name="pdiscount" placeholder="Enter product Discount" value="<?php echo $discount; ?>"><br><br>
              <b>New Product Ds </b> <input type="text" class="designInput inputSpecial" name="pdetail" placeholder="Enter product Detail" value="<?php echo $detail; ?>"><br><br>

            <input type="file" name="pimage" value="<?php  echo ('<img>'.$image->link.'</img>') ?>  "><br><br>

            <input type="submit" class="btn btn-secondary" name="submit" value="Update">

<?php }}} ?>
        </form>

</div><!--end of viewpage-->

 
</div><!--end of dashboard-->


<?php
if(isset($_POST['submit'])){
  $pname = $_POST['pname'];
  $pprice = $_POST['pprice'];
  $pcode = $_POST['pCode'];
  $stock = $_POST['pstock'];
  $pdiscount = $_POST['pdiscount'];
  $size = $_POST['psize'];
  $pdetail = $_POST['pdetail'];
  $pimage = $_FILES['pimage']['name'];
  $productId = $_GET["Updateid"];
  echo"<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;Updated</h3>";
 
 
  $query = "UPDATE tblproducts SET productName='$pname',productPrice='$pprice', productCode='$pcode', productStock='$stock',
  productDiscount='$pdiscount', productSize='$size', productDetails='$pdetail', pimage='$pimage',Updateid='$pprice'
  WHERE productId='$productId' ";

  if(mysqli_query($dbcon,$query)){
    //header("location: view.php");

  }
  else{
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Not Updated</b>";
  }


}

?>


<?php

include("../Include/footer.php");

?>