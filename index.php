<?php
require 'includes/common.php';
if(isset($_SESSION['email']))
    {
        header('location:home.php');
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome | E-Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body style="padding-top:50px;background:url(img/bg.jpg) no-repeat center center;">
        <?php
        include 'includes/header.php';
        ?>
        <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Fastest Growing Mobile Store</h1>
                            <p style="font-size: 20px;">Flat 12% off on all products.</p>
                            <br/>
                            <a  href="home.php" class="btn btn-danger btn-lg active">Shop Now</a>
                            <br>
                            <br>
                            <p class="text" style="font-size: 15px;">
                            <?php
                            if(isset($_GET["logon"])){
                                echo $_GET['logon'];
                            }
                            ?>
                            </p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="container text-center">
                <h2 class="about-head"><mark><b>Choose Your Dream Mobile!</b></mark></h2>
            </div>
        <div class="content" style="margin-top:30px; margin-right:15px;">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">
                            Mobile 1
                        </div>
                        <div class="panel-body">
                            <img src="img/iphone-7.jpg" class="img-responsive phone" alt="Mobile 1">
                        </div>
                        <div class="panel-footer">
                            <h3><a href="signup.php"><span class="label label-default">One Plus 7T</span></a></h3>
                            <p>Color : Dusky Black</p>
                            <p>RAM : 8 GB </p>
                            <p>M.R.P.: <del>Rs. 37,999/-</del></p>
                                <p>Price : Rs. 34,999/-</p>
                                <p>You Save: <i style="color:red";>Rs. 3,000/- (8%)</i></p>
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                     </div>
                   </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">Mobile 2</div>
                            <div class="panel-body"><img src="./img/samsung-galaxy-s20-ultra.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h3><a href="signup.php"><span class="label label-default">Samsung Galaxy S20 Ultra</span></a></h3>
                                <p>Color : Cosmic Gray</p>
                                <p>RAM : 12 GB </p>
                                <p>M.R.P.:<del>Rs. 1,03,000.00/-</del></p>
                                <p>Price : Rs. 97,999/-</p>
                                <p>You Save:<i style="color:red";>Rs. 5,001/- (5%)</i></p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">Mobile 3</div>
                            <div class="panel-body"><img src="./img/iphone-xs-max.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h3><a href="signup.php"><span class="label label-default">iPhone XS Max</span></a></h3>
                                <p>Color : Gold</p>
                                <p>RAM : 64 GB</p>
                                <p>M.R.P.:<del>Rs. 99,900/-</del>
                                </p>
                                <p>Price : Rs. 69,900/-</p>
                                <p>You Save:<i style="color:red;">Rs. 30,000/- (30%)</i></p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="row text-center">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading"style="background-color:rgb(47,162,7); color:white;" >Mobile 4</div>
                            <div class="panel-body"><img src="./img/iphone-xr.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                              <h3><a href="signup.php"><span class="label label-default">iPhone XR</span></a></h3>
                                <p>Color : Black</p>
                                <p>RAM : 64 GB </p>
                                <p>M.R.P.:<del>Rs. 63,999/-</del></p>
                                <p>Price : Rs. 53,999/-</p>
                                <p>You Save:<i style="color:red;">Rs. 10,000/- (10%)</i></p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">Mobile 5</div>
                            <div class="panel-body"><img src="./img/iphone-8.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                               <h3><a href="signup.php"><span class="label label-default">iPhone 8</span></a></h3>
                                <p>Color : Red</p>
                                <p>RAM : 64 GB </p>
                                <p>M.R.P:<del>Rs. 78,300 </del></p>
                                <p>Price : Rs. 68,300/-</p>
                                <P>You Save:<i style="color:red;">Rs. 10,000/- (10%)</i></P>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading" style="background-color:rgb(47,162,7); color:white;">Mobile 6</div>
                            <div class="panel-body"><img src="./img/mi-redmi-k20-pro.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h3><a href="signup.php"><span class="label label-default">Redmi Pro</span></a></h3>
                                <p>Color : Flame Red</p>
                                <p>RAM:6 GB </p>
                                <p>M.R.P.:<del>Rs. 31,999/-</del></p>
                                <p>Price : Rs. 26,999/-</p>
                                <p>You Save:<i style="color:red;">Rs. 5,000/- (6%)</i></p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php include ("./includes/footer.php"); 
        ?>
                    
                    
  
       
        
    </body>
</html>

