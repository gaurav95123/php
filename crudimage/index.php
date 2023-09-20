<?php
include 'config.php';

$sql = "SELECT * FROM crud_image";
$result = $conn->query($sql);
?>

<button>  <a href="create.php">add</a></button>              

<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>



    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><img src="assets/images/<?php echo $row['image']; ?>" width="100" alt="<?php echo $row['name']; ?>"></td>
        
         <td>
                <a href="view.php?id=<?php echo $row['id']; ?>">View</a>
            </td> 
        
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            </td> <br>
            <td>

                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
