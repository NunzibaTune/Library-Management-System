<?php

session_start();

if(isset($_REQUEST["Submit"]))
{


    $myjson=file_get_contents("../data/data.json");
    $myphpdata=json_decode($myjson);
    foreach($myphpdata as $myobjects)
    {
        
            if ($_REQUEST["name"]==$myobjects->Name && $_REQUEST["password"]==$myobjects->Password)
            {
                $_SESSION["username"]=$_REQUEST["name"];
                header("Location: ../view/profile.php");
            }
            else{
                echo "Not Valid User";
            }
        
    }
}

?>