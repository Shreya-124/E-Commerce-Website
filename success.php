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
        <title>Success | E-Store</title>
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
$user_id = $_SESSION["user_id"];
         $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
         $result = mysqli_query($con, $query) or die(mysqli_error($con));

         while($row = mysqli_fetch_array($result)){
            $product_id = $row["item_id"];
             $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$product_id'";            
             $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
         }
        require 'confirm.php';
    ?>
   <div class="content">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron" style="margin-top: 10px;">
                <h3 class="text-center">Thank You for Ordering from our E-Store!</h3>
                <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                <hr>
                <h5 class="text-center">To Continue Shopping , Click <a href="home.php">here</a></h5>
              </div>
            </div>
          </div>
        </div>
    <?php
        require 'includes/footer.php';
    ?>  
</body>
</html>
