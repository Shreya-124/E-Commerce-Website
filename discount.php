<?php
    $code=$_POST['code'];
    $CODE="OK";

    if($code!=$CODE){
        header('location:cart.php?m1=FALSE');
    }else{
        header('location:cart.php?m1=TRUE');
    }
?>
