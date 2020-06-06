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
   
    <main class="container">
        <br/>
		 <h2 class="card" class="table table-bordered  bg-light" style="text-align: center; color: black;"><b>N E W ___ C O L L E C T I O N</b></h2>
		 </br></br>
        <div class="card-deck">
            <div class="card">
                <a href="ProductDetail.php"><img class="card-img-top" src="./Assets/Images/d.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Slipper</h5>
              
                </div>
            </div>
            <div class="card">
                <a href="ProductDetail2.php"><img class="card-img-top" src="./Assets/Images/e.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Polo Shirt</h5>
                  
                </div>
            </div>
            <div class="card">
                <a href="ProductDetail3.php"><img class="card-img-top" src="./Assets/Images/f.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Watch</h5>
                   
                </div>
            </div>
        </div><br>
		 <div class="card-deck">
            <div class="card">
                <a><img class="card-img-top" src="./Assets/Images/b.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">D&G Bomber Jacket</h5>
                   
                </div>
            </div>
            <div class="card">
                <a><img class="card-img-top" src="./Assets/Images/c.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">BB Shirt</h5>
                    
                </div>
            </div>
            <div class="card">
                <a><img class="card-img-top" src="./Assets/Images/a.jpg"
                        alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Range Lauren Bomber Jacket</h5>
                   
                </div>
            </div>
        </div><br>
		
		
		
	 <div class="card-deck">
            <div class="card">
   
    <div class="row">
<?php    
require("requires/connection.php");



$query = "SELECT * FROM tblproducts";

$result = mysqli_query($dbcon,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productId'];
    $name = $row['productName'];
    $detail = $row['productDetails'];
    $image = $row['pimage'];
?>
 
      <div class="card"">
        <a href="ProductDetailed.php?id=<?php echo $id ?>">
          <span><b>Detail</b> : <?php echo $detail; ?></span><br><br>
        </a></br>
          <h3><?php echo $name; ?></h3>
      </div>

<?php }} ?>
</div>
 </div></div>
		
		
    </main>
	
	

   
    <?php
	include ('include/foot.php');
	?>
      
      
</body>
<script src="./Content/js/bootstrap.min.js"></script>
</html>

<? mysql_close($connection); ?>