<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the product details from the database
    $sql = "SELECT * FROM crud_image WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (isset($_POST['update'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            // Check if a new image was uploaded
            if ($_FILES["image"]["size"] > 0) {
                // File upload handling
                $target_dir = "assets/images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // Delete the old image file
                    unlink($target_dir . $row['image']);
                    $image = $_FILES["image"]["name"];
                } else {
                    echo "Error uploading image.";
                }
            } else {
                // No new image was uploaded, keep the old image
                $image = $row['image'];
            }

            // Update the product details in the database
            $updateSql = "UPDATE crud_image SET name = '$name', description = '$description', price = '$price', image = '$image' WHERE id = $id";

            if ($conn->query($updateSql) === TRUE) {
                header("Location: index.php");
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    } else {
        echo "Product not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <br>
        <label>Description:</label>
        <textarea name="description" required><?php echo $row['description']; ?></textarea>
        <br>
        <label>Price:</label>
        <input type="text" name="price" value="<?php echo $row['price']; ?>" required>
        <br>
        <label>Image:</label>
        <input type="file" name="image" accept="image/*">
        <br>
        <img src="assets/images/<?php echo $row['image']; ?>" width="100" alt="<?php echo $row['name']; ?>">
        <br>
        <input type="submit" name="update" value="Update Product">
    </form>
</body>
</html>
