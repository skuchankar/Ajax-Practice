<?php
if(isset($_GET["fname"]) && isset($_GET["lname"])) {
    $fname = htmlspecialchars($_GET["fname"]);
    $lname = htmlspecialchars($_GET["lname"]);

    $fullname = $fname . " " . $lname;

    echo"Hello, $fullname! Welcome to our website.";
}else{
    echo"Hi there! Please provide values for first name and last name.";
}
?>
