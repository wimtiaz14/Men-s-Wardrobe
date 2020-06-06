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
<div id="dashboard" style="margin-left:50px">
  
  <br>
<br><br>

<div id="pages">

      <form action="addprocess.php" method="post" enctype="multipart/form-data">
 <b>  Enter Product :</b><input type="text" class="designInput inputSpecial" name="pname" placeholder=" Name..." required><br><br>
 <b>  Enter Product :</b><input type="text" class="designInput inputSpecial" name="pprice" placeholder=" Price..."><br><br>
  <b> Enter Product :</b><input type="text" class="designInput inputSpecial" name="pCode" placeholder=" Code..."><br><br>
  <b> Enter Product :</b><input type="text" class="designInput inputSpecial" name="pdiscount" placeholder=" Discount..."><br><br>
  <b> Enter Product :</b><input type="text" class="designInput inputSpecial" name="pstock" placeholder=" Stock..."><br><br>
  <b> Enter Product :</b><input type="text" class="designInput inputSpecial" name="psize" placeholder=" Size..."><br><br>
  <b> Enter Product :</b><input type="text" class="designInput inputSpecial" name="pdetail" placeholder=" Detail..."><br><br>
            <input type="file" name="pimage" ><br><br>

            <input type="submit" class="btn btn-secondary" name="submit">
      </form>
</div>

 
</div>


<?php

include("../Include/footer.php");

?>