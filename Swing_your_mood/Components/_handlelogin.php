<?php
$showloginerror="false";
if($_SERVER['REQUEST_METHOD']=='POST'){
    include "_dbconnect.php";
    $username=$_POST['username'];
    $pass=$_POST['password'];

        // Check for existing user
    $existsql="SELECT * FROM `userinfo` WHERE username='$username'";
    $result=mysqli_query($conn,$existsql);
    $num_rows1=mysqli_num_rows($result);
    if($num_rows1==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['password'])){
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                if($username=='admin'){
                    header("Location: ../Admin/index.php?login=true");
                }
                else{
                    header("Location: ../index.php?login=true");
                }
        }
        else{
            $showloginerror="Incorrect Password";
            header("Location: ../index.php?login=false&error=$showloginerror");
        }
       }
       else{
        $showloginerror="User doesn't exist";
        header("Location: ../index.php?login=false&error=$showloginerror");   
       }
}
?>