<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio</title>
</head>
<body>
<?php
if(isset($_SESSION['status'])){
    echo"<h4>".$_SESSION['status']."</h4>";
    unset($_SESSION['status']);
}
?>
    <form action="code.php" method="POST">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" >
    </div>
      <div class="form-group">
        <label for="">Gender</label>
        <input type="radio" name="gender" value="male" >Male
        <input type="radio" name="gender" value="female" >Female
    </div>
    <div class="form-group">
        <button type="submit" name="save_radio">Save Radio Data</button>
    </div>
    </form>
</body>
</html>