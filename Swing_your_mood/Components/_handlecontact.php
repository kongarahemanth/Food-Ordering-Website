<?php
session_start();
$showcontacterror="false";
if($_SERVER['REQUEST_METHOD']=='POST'){
    include "_dbconnect.php";
    $username=$_SESSION['username'];
    $reason=$_POST['reason'];
    $desc=$_POST['desc'];

    if(isset($_SESSION['username'])){
        $sql= "INSERT INTO `contact` (`username`, `reason`, `description`, `timestamp`) VALUES ('$username', '$reason', '$desc', current_timestamp());";
        $result=mysqli_query($conn,$sql);
        if($result) {
            $showcontacterror="Your query/review reached us successfully";
            header("Location: ../contact.php?review=true&success=$showcontacterror");
        }
    }
       else{
        $showcontacterror="Sorry! We are unable to handle your request";
        header("Location: ../contact.php?review=false&error=$showcontacterror");   
       }
 }
?>