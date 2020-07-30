<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php?logon= Please Login to Continue!');
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
        <title>Settings | E-Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body style="padding-top:50px;">
        <?php
            include ("includes/header.php");
?>

          <div class="container">
          <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default-setting">
            <div class="panel-heading">
              <h2 class="text-left">Change Password</h2>
            </div>
            <div class="panel-body">
                <form action="settings_script.php" method="POST">
                  <div class="form-group">
                    <input type="password" class="form-control" name="oldPassword" placeholder='Old Password' required>                    
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="newPassword" placeholder='New Password' required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="newPasswordRe" placeholder='Re-type New Password' required>                    
                  </div>
                  <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                    <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Confirm">
                    </div>
                </form>
            </div>
          </div>
          </div>
          </div>
        <footer style="position:fixed;">
        <?php  
            include 'includes/footer.php';
        ?>
        </footer>
       </body>
</html>



