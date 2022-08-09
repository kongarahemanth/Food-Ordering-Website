<?php
$showerror="false";
include "_dbconnect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $string=$pass;
    $mobno=$_POST['mobile_no'];
    $aadhar=$_POST['aadhar'];

    // Check for existing user
    $existsql="SELECT * FROM `userinfo` WHERE username='$username'";
    $result=mysqli_query($conn,$existsql);
    $num_rows=mysqli_num_rows($result);
    if($num_rows>0){
        $showerror="Username already exists";
    }
    else{
        if($pass!=$cpass){
            $showerror="Passwords do not match";
        }

        elseif($pass==$cpass && strlen($pass)<10){
            $showerror="Password too small. Minimum 10 characters are required";
        }
            
       else{
        if(preg_match('/[A-Z]/', $string)){
            if(preg_match('/[a-z]/', $string)){
                if(preg_match('/[0-9]/', $string)){
                $hash=password_hash($pass, PASSWORD_DEFAULT);
                $sql= "INSERT INTO `userinfo` (`username`, `password`, `timestamp`,`aadhar`,`mobile_no`) VALUES ('$username', '$hash', current_timestamp(),'$aadhar','$mobno')";
                $result=mysqli_query($conn,$sql);
            if($result){
                $showalert=true;
                header("Location: ../index.php?signupsuccess=true");
                exit();
                    }       
            }
            else{
                $showerror=" There is no number inside the password. Atleast one is required";
                }
            }
                else{
                $showerror="There is no lower case characters inside the password. Atleast one is required";
                }
            }
            else{
            $showerror="There is no Upper case characters inside the password. Atleast one is required ";
            }
        }
    }
    }
        header("Location: ../index.php?signupsuccess=false&error=$showerror");
?>