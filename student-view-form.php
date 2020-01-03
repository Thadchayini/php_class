<?php

$con = mysqli_connect("localhost","root","","test_db");

echo '</br>';

$result = mysqli_query($con,"select * from students");

// while($row = mysqli_fetch_row($result)){
//     echo '<pre>';
//     print_r($row);
//     echo '</pre>';
// }

?>

<html>
    <head></head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php
                while($row=mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["first_name"];?></td>
                <td><?php echo $row["last_name"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["address"];?></td>
              
            </tr>
        </table>
    </body>
</html>