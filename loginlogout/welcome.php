<!-- welcome -->
<?php
session_start();
// for warning hide
error_reporting(0);

// for query  execute  create connection   include('connect.php');
 include('connect.php');

$userprofile=$_SESSION['user_name'];
// for the url hiting (change)  condition

// <===condition start====> 
if($userprofile==true){

}
else{
    header('location:login.php');
}

// <=== condition end===>


echo "welcome  ".$userprofile;


// for featching multiple data from database like name image etc;
  $query = "SELECT * FROM crud_image WHERE USERNAME = '$userprofile'";
    $data = mysqli_query($conn, $query);
    $result= mysqli_fetch_assoc($data); 
    // echo $result['name'];
    // echo $result['price'];
    // echo $result['description'];

?>
<!-- this image is manually atteched from folder not database  -->
<!-- <img src="img/MY_PHOTO.jpg" width="100" height="100" alt=""> -->
<!-- <img src="<?php echo $result['image']?>" width="100" height="100" alt=""> -->
<a href="logout.php">Logout</a>
