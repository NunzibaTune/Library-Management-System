<?php
session_start();
if(isset($_COOKIE["name"]))
{
    echo "Welcome Back";
}
else{
    echo "Welcome To My Site";
}


$hasError=0;
if(isset($_REQUEST["Submit"]))
{
if(empty($_REQUEST["name"]))
{
    echo "Username is required";
    $hasError=1;
}
if(empty($_REQUEST["password"]))
{
    echo "Password is required";
    $hasError=1;
}
if($hasError==0)
{
    $_SESSION["uname"]=$_REQUEST["name"];
    $_SESSION["password"]=$_REQUEST["password"];
    header("Location: ../view/registrationFormManager02.php");


}

}

?>