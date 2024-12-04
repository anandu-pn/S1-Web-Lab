<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <center>
        <label for="">user name</label>
        <input type="text" name="username"><br>
        <label for="">Passoword:</label>
        <input type="password" name="pass"><br>
        <input type="submit" name="sub"></center>
    </form>
</body>
</html>
<?php
require 'connect.php';
if(isset($_POST['sub'])){
    $user=$_POST['username'];
    $pass=$_POST['pass'];
if($pas!=''){
    $data="SELECT * FROM userdb WHERE name='$user' AND password='$pass'";
    $q=mysqli_query($conn,$data);
    $result=mysqli_num_rows($result);
    if($result){
        session_start(); 
        $_SESSION['username'] = $user;
        echo "<script>alert('login successfull reDirecting');
        window.location.href = 'welcome.php';</script>";
        //header('Location:login.php');
        exit();
    }
    else { echo "Error: " . mysqli_error($conn); }
}
else{
    echo "<script>alert('password do not match re enter password');</script>";
}
}
?>