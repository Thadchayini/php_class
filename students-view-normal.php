<?php
//error hide pannum
error_reporting(0);
//error display agum
// error_reporting(ALL);
$con = mysqli_connect("localhost","root","","test_db");

if($con){
    echo "connection okk";
}else{
    echo "connection failed";

    //check what is the error
    // echo "connection failed".mysqli_connect_error()
}

echo '</br>';

$result = mysqli_query($con,"select * from students");
echo mysqli_num_rows($result);

echo '</br>';

//it will display index array
// $row = mysqli_fetch_row($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

echo '</br>';

//it will print addociative array
// $row = mysqli_fetch_assoc($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

echo '</br>';

//It will display both(index and associative)
// $row = mysqli_fetch_array($result);
// echo '<pre>';
// print_r($row);
// echo '</pre>';

echo '</br>';

while($row = mysqli_fetch_row($result)){
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}

?>