<?php
session_start();
require("../requires/connection.php");


if(isset($_SESSION['username'])===false){
      header("location: index.php");
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


	<main class="container">
 
<br>


  <table class="table table-bordered  bg-light" width="100%" >
    <tr >
      <th scope="col"  width="9%">Product Id</th>
      <th scope="col" width="9%">Product Name</th>
      <th scope="col" width="9%">Product Price</th>
      <th scope="col" width="9%"> Product Code</th>
      <th scope="col" width="9%">Product In Stock</th>
      <th scope="col" width="9%">Product Discount</th>
      <th scope="col" width="9%">Product Size</th>
      <th scope="col" width="9%">Product Detail</th>
      <th scope="col" width="9%">Product Image</th>
      <th scope="col" width="9%">Delete Record</th>
      <th scope="col" >Edit Record</th>
    </tr>
	

<?php
require("../requires/connection.php");

$query = "SELECT * FROM tblproducts";
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

<tr scope="row">
  <td><?php echo $id; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $price; ?></td>
  <td><?php echo $code; ?></td>
  <td><?php echo $stock; ?></td>
  <td><?php echo $discount; ?></td>
  <td><?php echo $size; ?></td>
  <td><?php echo $detail; ?></td>
  <td><img src="../Assets/Images/<?php echo $image; ?>" alt="image here" width="60px" height="60px" ></td>
  <td><a href="delete.php?Deleteid=<?php echo $id; ?>">Delete</a></td>
  <td><a href="update.php?Updateid=<?php echo $id; ?>">Edit</a></td>
</tr>

<?php }} ?>

  </table>
</main>

<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

<?php

include("../Include/footer.php");

?>