<?php
session_start();
include('connect.php');

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $psd = $_POST['password'];
    $query = "SELECT * FROM crud_image WHERE USERNAME = '$user'";
    $data = mysqli_query($conn, $query);
     $total = mysqli_num_rows($data);
     if($total==1){
        // echo"login successfull";
        // for the next location
        $_SESSION['user_name']=$user;
        header('location:welcome.php');
     }
     else{
        echo"login failed";
     }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form action="" method="POST">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
