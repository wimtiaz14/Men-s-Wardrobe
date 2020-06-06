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
        <br/>
        <div class="container bg-light">
            <div style="margin-left:10px;">
                <h2>Contact Us</h2><br>
                <div class="row">
                    <div class="col-sm-8">
                        <form>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="Text" class="form-control" id="inputName" placeholder="Example:Wasif">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="Text" class="form-control" id="inputEmail"
                                        placeholder="Example:ABC@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Phone No:</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="inputphone" placeholder="090078601">
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">City</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="1">Lahore</option>
                                    <option value="2">Karachi</option>
                                    <option value="3">Multan</option>
                                    <option value="1">Pindi</option>
                                    <option value="2">Faislabad</option>
                                    <option value="3">Islamabd</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlTextarea4">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                            </div>
                            <div><button class="btn btn-primary" type="submit">Submit</button></div>
                        </form>
                    </div>



                    <div class="col-sm-4">
                        <div class="container" style="float :center; margin-top:-20px">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-12 foundation">

                                        <h3>ADDRESS</h3>

                                        <ul>
                                            <li><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>22-A Defence
                                            </li>
                                            <li><i class="fa fa-phone fa-fw" aria-hidden="true"></i>0322-7654321</li>
                                        </ul>
                                        <!--Google map-->
                                        <div class="mapouter"><div class="gmap_canvas">
										<iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=defence%20lahore&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
										</iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
										</div><style>.mapouter{position:relative;text-align:right;height:300px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style></div>

                                        <!--Google Maps-->

                                    </div>
                                </div>
                            </div>
                        </div>


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