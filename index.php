<?php require("requires/connection.php"); ?>
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
        
		<section>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./Assets/Images/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./Assets/Images/5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./Assets/Images/slider.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</section>
		
		<dl class="row">
  <dt class="col-sm-4">2020 COLLECTION</dt></br>
  <dd class="col-sm-8"><h2>M E N'S    _  S T Y L E</h2></dd></dl>

        <br/>
        <section class="clearfix ">
            <div class="card-deck">
                <div class="card">                    
                  <a href="ProductDetail.php"><img class="card-img-top" src="./Assets/Images/d.jpg" alt="Card image cap" width="200px" height="200px"></a>
                  <div class="card-body">
                    <h5 class="card-title">Slipper</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
                <div class="card">
                    <a href="ProductDetail2.php"><img class="card-img-top" src="./Assets/Images/e.jpg" alt="Card image cap" width="200px" height="200px"></a>
                  <div class="card-body">
                    <h5 class="card-title">Paris Polo</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
                <div class="card">
                    <a href="ProductDetail3.php"><img class="card-img-top" src="./Assets/Images/f.jpg" alt="Card image cap" width="200px" height="200px"></a>
                  <div class="card-body">
                    <h5 class="card-title">Watch</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                </div>
              </div>
        </section>
		
    </main>
    
    <?php
	include ('include/foot.php');
	?>
      
      
</body>
<script src="./Content/js/bootstrap.min.js"></script>
</html>

<? mysql_close($connection); ?>