<?php session_start();
 require("../requires/connection.php");
if(isset($_SESSION['username'])===false){
      header("location: index.php");
      die();
}


 ?>
<!DOCTYPE html>



<html>

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

<body>
    <?php
	

include ('../include/header.php');

?>
	
     
 
	
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
    <main class="container">
     <h2 class="text-center"><span class="badge badge-secondary">Welcome To Admin User Home.</span></h2>
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
	

    <?php
  include ('../include/footer.php');
      ?>
      
</body>
<script src="./Content/js/bootstrap.min.js"></script>
</html>

<? mysql_close($connection); ?>