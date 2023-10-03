<?php
session_start();
$con=mysqli_connect("localhost", "root", "", "image_upload");
if(isset($_POST['save_radio'])) {
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $query="INSERT INTO radiobtn (name, gender) values ('$name', '$gender') ";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['status']="Inserted Successfully";
        header("Location:radio.php");
    }
    else{
        $_SESSION['status']="failed";
        // header("Location:radio.php");
        
    }

}
?>