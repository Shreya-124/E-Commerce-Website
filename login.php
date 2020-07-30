<?php
require './includes/common.php';
if(isset($_SESSION['email']))
{
    header('location: home.php');
}
?>
<html>
    <head>
        <title>Home | E-Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
        <div id="content">
        <div class="container-fluid" id="login-panel" style="margin-top: 15px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>LOGIN</h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="login_script.php">
                        <div class="form-group">
                            <input type="email" placeholder="Enter E-mail" class="form-control" name="email"> 
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" class="form-control" name="password">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div><p class="text-danger">
                            <?php
                            if(isset($_GET['error'])){
                                echo $_GET['error'];
                            }
                            ?>
                            </p>
                        </div>
                    </form>
                    <br/>
                </div>
                <div class="panel-footer">
                    Don't have an account? <a href="signup.php">Register</a> 
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
         <?php include 'includes/footer.php'; ?>
    </body>      
</html>


