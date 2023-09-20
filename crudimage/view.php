<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the product details from the database
    $sql = "SELECT * FROM crud_image WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
</head>
<body>
    <h2>View Product</h2>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td><?php echo $row['description']; ?></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><?php echo $row['price']; ?></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><img src="assets/images/<?php echo $row['image']; ?>" width="200" alt="<?php echo $row['name']; ?>"></td>
        </tr>
    </table>
    <a href="index.php">Back</a>
</body>
</html>
