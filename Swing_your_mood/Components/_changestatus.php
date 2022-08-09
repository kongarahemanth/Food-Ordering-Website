<?php
session_start();
$showstatuserror="false";
    include "_dbconnect.php";
    $type=$_GET['type'];
    $id=$_GET['id'];
    // echo $type;
    if($type=="s") $table="special_orders";
    else $table="menu_orders";
    $existsql="SELECT * FROM `$table` WHERE sno='$id'";
    $result=mysqli_query($conn,$existsql);
    $row=mysqli_fetch_assoc($result);
    $status=$row['status'];
    if($status==2){
        $showstatuserror="Order has been delivered";
        header("Location: ../Admin/index.php?status=false&error=$showstatuserror"); 
    }
    else{
        $status+=1;
    if(isset($_SESSION['username'])){
        $sql= "UPDATE `$table` SET `status` = '$status' WHERE `sno` = '$id';";
        $result=mysqli_query($conn,$sql);
        if($result) {
            $showstatuserror="The status has been changed successfully";
            header("Location: ../Admin/index.php?status=true&success=$showstatuserror");
        }
        else{
            $showstatuserror="Sorry! We are unable to handle your request";
            header("Location: ../Admin/index.php?status=false&error=$showstatuserror");   
           }
    }
    }
    
       
?>