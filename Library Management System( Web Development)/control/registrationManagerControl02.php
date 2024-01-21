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
if(empty($_REQUEST["age"]))
{
    echo "Age is required";
    $hasError=1;
}

if(empty($_REQUEST["gender"]))
{
    echo "Name is required";
    $hasError=1;
}

if(empty($_REQUEST["nidNumber"]))
{
    echo "NID is required";
    $hasError=1;
}

if(empty($_REQUEST["contactNumber"]))
{
    echo "Contact is required";
    $hasError=1;
}

if(empty($_REQUEST["email"]))
{
    echo "Email is required";
    $hasError=1;
}

if(empty($_FILES["filetoupload"]["name"]))
{
    echo "No file selected";
}
else{
    if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],"../uploads/".$_REQUEST["name"].".jpg"))
    {
        echo "file uploaded";
    }
    else
    {
        echo "file not uploaded";
    }
}

if($hasError==0)
{
    $_SESSION["age"]=$_REQUEST["age"];
    $_SESSION["gender"]=$_REQUEST["gender"];
    $_SESSION["nidNumber"]=$_REQUEST["nidNumber"];
    $_SESSION["contactNumber"]=$_REQUEST["contactNumber"];
    $_SESSION["email"]=$_REQUEST["email"];
    $_SESSION["file"]=" ../uploads/".$_FILES["myfile"]["name"].".jpg";
    header("Location: ../view/previewManager.php");
}

}

?>
