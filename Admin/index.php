<?php
session_start();
function logged_in(){
	return isset($_SESSION['userId']);
}
function confirmed_logged_in(){
	if(!logged_in()){?>
	<script type="text/javascript" >
	window.location="Admin/index.php";
	</script>
	<?php
}}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MY ADMIN</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image: url('../assets/images/loginbg.jpg');">
 
    <div class="container" style="text-align:center; border:1px dashed grey; background-color:#F5F5F5;" >
        <br><br><br><br><br><br><br><br><br><br>
           
                    <div class="panel-heading" >
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    
                        <form  action="index.php" method="post">
                            
                                <div class="form-group">
                                 <b>  Enter:</b> <input class="form-control" placeholder="Name..." name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                <b>  Enter:</b>  <input class="form-control" placeholder="Password..." name="pass" type="password" value="">
                                </div>
                               
                                <button class="btn btn-lg btn-success" type="submit" name="submit">Login</button> 
                            
                        </form>
<?php
require("../requires/connection.php");

  if(isset($_POST['submit'])){

	$name = $_POST['user'];
	$pass = $_POST['pass'];

	$_SESSION['username'] = $name;
	$_SESSION['password'] = $pass;


	$query = "SELECT * FROM tblusers WHERE username='$name' AND userpassword='$pass' ";

	$result = mysqli_query($dbcon,$query);

	$total = mysqli_num_rows($result);
    
    if($total==1){
    	header("location: welcome.php");
    }
    else{
    str_repeat('&nbsp;', 20) ;	
	echo "
	<p><b><center>Incorrect Password</center><b></p>" ;
    }
  }

?> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
                     
</body>
</html>