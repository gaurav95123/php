<?php
include "connect.php";

// join in sql
// create a db table with primary key id and forigen key id like stid and cid etc
// then give short name to particular table  like studentsrecord to str and studentsclass sc etc
// then run sql query for selected field which we require  

$query = "SELECT str.stname, str.staddresss, str.stphone, sr.result, sc.class, sc.section
          FROM studentsrecord str
          INNER JOIN studentsresult sr ON str.id = sr.stid
          INNER JOIN studentsclass sc ON str.id = sc.cid";

$result = mysqli_query($conn, $query);
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Result</td>
        <td>Class</td>
        <td>Section</td>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['stname'] ?></td>
            <td><?php echo $row['staddresss'] ?></td>
            <td><?php echo $row['stphone'] ?></td>
            <td><?php echo $row['result'] ?></td>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['section'] ?></td>
        </tr>
    <?php
    }
    ?>

</table>
