<?php
session_start();


if(isset($_COOKIE["name"]))
{
    echo "Welcome Back";
}
else{
    echo "Welcome";
}

$hasError=0;
if(isset($_REQUEST["Submit"]))
{
if(empty($_REQUEST["age"]))
{
    echo "Age is required";
    $hasError=1;
}
if(empty($_REQUEST["gender"]))
{
    echo "Gender is required";
    $hasError=1;
}
if(empty($_REQUEST["contactNumber"]))
{
    echo "Contact Number is required";
    $hasError=1;
}
if(empty($_REQUEST["email"]))
{
    echo "Email is required";
    $hasError=1;
}



if($hasError==0)
{
    $_SESSION["age"]=$_REQUEST["age"];
    $_SESSION["gender"]=$_REQUEST["gender"];
    $_SESSION["contactNumber"]=$_REQUEST["contactNumber"];
    $_SESSION["email"]=$_REQUEST["email"];
    
    header("Location: ../view/previewCustomer.php");
}

}

?>
