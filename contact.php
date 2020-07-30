<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Contact | E-Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body style="padding-top: 50px;">
        <?php
            include ("includes/header.php");
        ?>
          <div class="container">
             <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold about-head">Live Support</h2>
                <div class="box-padding-10">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                <p class="text-muted">What makes us different from all those beautiful web and business sites out there is the way we interact with our customers.Our client's satisfaction is what we look for,and hence are always available to hear you.We reply within few minutes or 16 business hours at the most.<br><mark>Feel free to fill the form below or ping us directly on our mail.</mark><i style="font-size:24px;color:blue;" class="fa">&#xf0a7;</i></p>
              </div>
              </div>

              <div class="col-md-4">
                <img src="./img/live-support.gif" class="img-responsive" alt="Live Support">
              </div>
            </div>
              <div class="row">
              <div class="col-md-7">
                  <h2 class="about-head"><b>Contact Us</b></h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Type Your Message Here:</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" style="margin-bottom:10px;">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">500, Kanchan Park Lorem, italium dolor square amidst consect,</p>
                  <p class="text-muted">12-568-875 Lorem ipsum dolor sit,</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-282-0000886</p>
                  <p class="text-muted">Email : mobile2@shop.com</p>
                  <p class="text-muted">Follow On: <a href="https://www.instagram.com"><i class="fa fa-instagram" style="font-size:28px;color:red;"></i></a>  <a href="https://www.facebook.com"><i class="fa fa-facebook-square" style="font-size:28px;color:blue;"></i></a></p>                                   
                </div>
              </div>
            </div>
          </div>
        <?php
        include("includes/footer.php");
    ?>
    </body>
</html>

