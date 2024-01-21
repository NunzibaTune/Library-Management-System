<?php
session_start();


if(isset($_REQUEST["Submit"]))
{

    $phpArray= array(
        "Name"=>$_SESSION["uname"],
        "Age"=>$_SESSION["age"],
        "Gender"=>$_SESSION["gender"],
        "ConatactNumber"=>$_SESSION["contactNumber"],
        "Email"=>$_SESSION["email"],
        "Password"=>$_SESSION["password"],
    );


    $phpdata=json_decode(file_get_contents("../data/data.json"));
    $phpdata[]=$phpArray;


    $myJsonObj=json_encode($phpdata,JSON_PRETTY_PRINT);
    
    if(file_put_contents("../data/data.json",$myJsonObj))
    {
        echo "json data written";
    }
    else
    {
        echo "error occured";
        
    }

    
    header("Location: ../view/loginForm.php");



}





?>