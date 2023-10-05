<table border="1">
    <tr>

        <td>Name</td>
        <td>Address</td>
        <td>phone</td>
        <td>Result</td>
    </tr>


    
    
<?php
        include "connect.php";
        $qurey="select str.*, sr.result from studentsrecord str,studentsresult sr where str.id=stid";
        $result=mysqli_query($conn,$qurey);
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
    <td>
        <?php echo $row['stname']?>
    </td>
     <td>
        <?php echo $row['staddresss']?>
    </td> 
    <td>
        <?php echo $row['stphone']?>
        
    </td>
  <td>
        <?php echo $row['result']?>
        
    </td>
</tr>
    <?php
    
        }
?>


</table>