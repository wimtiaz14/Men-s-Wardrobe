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
   <br/>
   <main>
        <div class="container bg-light" style="height: 720px">
            <div style="margin-left:10px;">
                <h2>About Our Bussiness</h2><br>
                <div class="row">
                    <div class="col-sm-5"><img src="./Assets/Images/6.jpg" width="200px" height="200px"></div>
                    <div class="col-sm-7">
                        <p>If there’s one thing we know about our customers––they’re busy living. They’re going to work.
                            They’re raising kids. They’re hitting the gym. They’re studying for tests. They’re headed
                            out on Friday night. They’re staying in with Sunday pancakes.
                            Keeping you effortlessly stylish throughout the day lies at the core of what we do. At
                            Billionaire Clothing Shop Online, we’ve made it our mission to provide simple, affordable
                            wardrobe staples to people who love to live. We’ve got the looks you want, from the brands
                            you love, in the colors and sizes you need.
                            Skip the lines at the mall; we’ve created an online shopping experience that fits your
                            schedule just as well as it does your budget.<br>
                            At Billionaire Clothing Shop Online, we want you to be comfortable, confident, and carefree
                            – in what you wear and how you shop. Let us dress your every day.<br>
                            <p class="font-weight-bold">Everyday fashion is our promise to you.</p>
                        </p>
                    </div>
                </div>
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