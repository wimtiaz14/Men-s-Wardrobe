<?php
session_start();
require("../requires/connection.php");

if(isset($_SESSION['username'])===false){
	header("location: index.php");
	die();
}


require("../requires/connection.php");

if($_GET){
	$id = $_GET['Deleteid'];


	$query = "DELETE FROM tblproducts WHERE productId='$id' ";

	if(mysqli_query($dbcon,$query)){
		header("location: view.php");
	}

}


?>