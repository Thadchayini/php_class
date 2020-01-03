<?php

echo '<table border = "1">';
echo '<tr><td colspan = "2"> Student Details </td></tr>';

// first name
echo '<tr>';
echo '<td>First Name</td>';
echo '<td>' . $_POST["fname"] . '</td>';
echo '</tr>';

// last name
echo '<tr>';
echo '<td>Last Name</td>';
echo '<td>' . $_POST["lname"] . '</td>';
echo '</tr>';

// gender
echo '<tr>';
echo '<td>Gender</td>';
echo '<td>' . $_POST["gender"] . '</td>';
echo '</tr>';

// class
echo '<tr>';
echo '<td>Class</td>';
echo '<td>' . $_POST["class"] . '</td>';
echo '</tr>';

// subject
// $subjects = $_POST[subject];

// foreach ($subjects as $subject){
//     echo '<tr>';
// echo '<td>Subject</td>';
// echo '<td>' . $subject . '</td>';
// echo '</tr>';
// }

//implode It is convert Array to String
echo '<tr>';
echo '<td>Subject</td>';
echo '<td>' . implode(",", $_POST["subject"]) . '</td>';
echo '</tr>';


// address
echo '<tr>';
echo '<td>Address</td>';
echo '<td>' . $_POST["address"] . '</td>';
echo '</tr>';
echo '</table>';



//explode It is convert String to array
$sub = "Maths,English,Tamil,Science";
$subarray = explode(",", $sub);
echo $subarray[1];
echo "</br>";

//chect the comming values arrays or not(is_array)
if(is_Array($_POST["subject"])){

    echo '<tr>';
    echo '<td>Subject</td>';
    echo '<td>' . implode(",", $_POST["subject"]) . '</td>';
    echo '</tr>';

    }else{

    echo '<tr>';
    echo '<td>Subject</td>';
    echo '<td>' . $subject . '</td>';
    echo '</tr>';

    }



?>