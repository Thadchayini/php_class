<?php

//it can only receive get method
// print_r($_GET);
// echo '<br/>';
// echo $_GET["fname"];
// echo $_GET["password"];

//it can only receive post method
print_r($_POST);
echo '<br/>';
echo $_POST["fname"];
echo $_POST["password"];

//it can receive both methods post and get
// print_r($_REQUEST);
// echo '<br/>';
// echo $_REQUEST["fname"];
// echo $_REQUEST["password"];
?>