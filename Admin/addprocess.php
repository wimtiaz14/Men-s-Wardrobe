<?php

session_start();


require("../requires/connection.php");
if(isset($_SESSION['username'])===false){
      header("location: index.php");
      die();
}


if(isset($_POST['submit'])){
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pcode = $_POST['pCode'];
	$stock = $_POST['pstock'];
	$pdiscount = $_POST['pdiscount'];
	$size = $_POST['psize'];
	$pdetail = $_POST['pdetail'];
	$pimage = $_FILES['pimage']['name'];


	$query = "INSERT INTO tblproducts(productName,productPrice,productCode,productStock,
	productDiscount,productSize,productDetails,pimage)
	VALUES('$pname','$pprice','$pcode','$stock','$pdiscount','$size','$pdetail','$pimage')";
	echo $query;
	if(mysqli_query($dbcon,$query)){
		move_uploaded_file($_FILES['pimage']['tmp_name'], "../Assets/Images/".$pimage);
		header("location: welcome.php");
	}
	else{
		echo "Not inserted";
	}

}
?>