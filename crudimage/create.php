<?php include 'config.php'; ?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required>
    <br>
    <label>Description:</label>
    <textarea name="description" required></textarea>
    <br>
    <label>Price:</label>
    <input type="text" name="price" required>
    <br>
    <label>Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br>
    <input type="submit" name="submit" value="Add Product">
</form>
