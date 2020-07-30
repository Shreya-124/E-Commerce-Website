<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
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
        <title>Mobile Shop | Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body style="padding-top:50px;">
        <?php
            include ("includes/header.php");
        ?>     
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./img/one-plus-7T.jpg" class="img-responsive signup-image" alt="image">
                </div>
                <div class="col-md-6">
                    <h1>SIGN UP</h1>
                    <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"  name="email" required>
                                <p class="text-warning"><?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?></p>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                             <p class="text-warning"><?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?></p>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                            </div>
                            <div class="btn-signup">
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
              </div>
            </div>
            </div>
   <?php
        include("includes/footer.php");
    ?>
   </body>
</html>

