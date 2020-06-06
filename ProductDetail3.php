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
   
      <main>
        <div class="container bg-light" style ="height:1000px">
            <div><h2 class="card-text; margin-top:100px"> Third Product Detail</h2></div><br>
              <div class="row">
                <div class="col" >
                 <img src="./Assets/Images/f.jpg" alt="..." class="img-thumbnail">
                 <div class="card-body">
                <h4 class="card-text">-Watch</h4>
              </div>
                </div>
                <div class="col">
                
            <div>
            
               <b>Product Name:</b><p>Watch</p><br>
               <b>Product Code:</b><p>BB3</p><br>
               <b>Discount:</b><p>Flat 50% Off</p><br>
               <b>Colors:</b>
                <input type="color" id="head" name="head"
                       value="blue">
            </div><br>
                <form>
            <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0"><b>Size:</b></legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Small
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Medium
                      </label>
                    </div>
                 <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                       Large
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset></form>
                </div></div>
                  <div class="row" style="margin-left:20px;">
                  <p>Renowned for their unconventional take on classic sportswear pieces, lauren continue to fill our wardrobes with renovated retro style.
                  Created with<br>Italian flair and quality, taking inspirations directly from the sports for which they feature in, 
                  Lauren continue to revolutionise athleisure apparel;<br>
                  always conscious that the clothing they create must enhance performance but never compromise on giving you a signature look.
                  BB produce<br> high quality knitwear and fashion focused casual wear collections, drawing inspiration from their rich Scottish heritage.
                  </p>
                <ul class="list-unstyled"><ul>
                  <li>Regular fit</li>
                  <li>Lightweight and breathable waterproof shell</li>
                  <li>Twin front pockets</li>
                  <li>Signature branding at chest</li>
                </ul></ul>
                </div>
                </div>
                
    </main>

 
    <?php
	include ('include/foot.php');
	?>
      
      
</body>
<script src="./Content/js/bootstrap.min.js"></script>
</html>

<? mysql_close($connection); ?>