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
        <title>Home | E-Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="newcss.css">
    </head>
    <body style="padding-top:50px;">
        <?php
            include './includes/header.php';
            include './includes/check_if_added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
        ?>
  
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h4 class='text-center'>Welcome $email</h4>";
                        echo "<p class='text-center' style='color:green;'>We have the best Mobile phone from Biggest Brands for you. No need to hunt around, we have all in one place.</p>"
                    ?>
                    <div class="bdt-advanced-button-content-wrapper  " data-text="Get in touch">
                                                <div class="bdt-advanced-button-icon bdt-button-icon-align-left">
                                                   <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                </div>
                                                <div class="bdt-advanced-button-text">Get in Touch</div>
                                             </div>
                </div>
                <hr>
 <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body"><img src="img/one-plus-7T.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 7T</h4>
                                <p>Battery : 3800mAH</p>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 35,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=1" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body"><img src="img/one-plus-7T-pro.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">One Plus 7T Pro</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 48MP +8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 47,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=2" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                    </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body"><img src="img/iphone-xs-max.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XS Max</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 42MP + 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 99,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=3" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body"><img src="img/iphone-xr.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XR</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 20MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 53,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=4" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body"><img src="img/iphone-8.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 8</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 41,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=5" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="img/mi-redmi-k20-pro.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi K20 Pro</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=6" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 7</div>
                            <div class="panel-body"><img src="img/mi-note-8.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi Note 8</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 20MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 6GB ROM:64GB</p>
                                <p class="p-bold">Price : 9,999/-</p>
                            <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=7" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 8</div>
                            <div class="panel-body"><img src="img/iphone-7.jpg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 7</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 12MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=8" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 9</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-a51.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy A51</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 12MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 25,250/-</p>
                               <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=9" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 10</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-s-9.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 24MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 30,999/-</p>
                               <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=10" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 11</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-s10.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S10</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP + 20MP| 16MP Front Camera</p>
                                <p>RAM : 12GB ROM:1024GB</p>
                                <p class="p-bold">Price : 1,29,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=11" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 12</div>
                            <div class="panel-body"><img src="img/samsung-galaxy-s20-ultra.jpeg" class="img-responsive phone" alt="Phone"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S20 Ultra</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:256GB</p>
                                <p class="p-bold">Price : 97,999/-</p>
                                <?php
                            if(!isset($_SESSION['email'])){?>
                            <p><a href="#" data-target="#login-modal" data-toggle="modal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
                            } else {
                                if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else{ ?>
                            <a href="cart-add.php?id=12" name="add" value="add"  class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        
  <?php
        include './includes/footer.php';
    ?>
</body>
</html>

