<?php
    include "_dbconnect.php";
    $username=$_SESSION['username'];    
    if(isset($_SESSION['menu_items'])){
        $menu_items=$_SESSION['menu_items'];
        $menu_prices=$_SESSION['menu_prices'];
        $menu_qty=$_SESSION['menu_qty'];
        $sql= "INSERT INTO `menu_orders` (`username`, `menu_names`, `menu_qty`, `menu_prices`,`status`, `timestamp`) VALUES ('$username', '$menu_items', '$menu_qty', '$menu_prices', '0' ,current_timestamp());";
        $result=mysqli_query($conn,$sql);
        if($result) {
            $_SESSION['placed']=true;
        }
        unset($_SESSION['menu_items']); 
        unset($_SESSION['menu_prices']);
        unset($_SESSION['menu_qty']);
    }
    else if(isset($_SESSION['specials_items'])){
        $specials_items=$_SESSION['specials_items'];
        $specials_prices=$_SESSION['specials_prices'];
        $specials_qty=$_SESSION['specials_qty'];
        $sql= "INSERT INTO `special_orders` (`username`, `specials_qty`, `specials_prices`, `specials_names`, `status`, `timestamp`) VALUES ('$username', '$specials_qty', '$specials_prices', '$specials_items', '0', current_timestamp());";
        $result=mysqli_query($conn,$sql);
        if($result) {
            $_SESSION['placed']=true;
        }
        unset($_SESSION['specials_items']); 
        unset($_SESSION['specials_prices']);
        unset($_SESSION['specials_qty']);
    }
?>