<?php
setcookie("LoginForm","visited",time()+14400*60);
include '../control/loginFormControl.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body >       

<form action="" method="POST" >

<h2><b>LOGIN</b></h2>
<br><br><br>
<table>


<tr>
    <td> Username </td>
    <td> <input type="text" name="name"> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td>
</tr>
</table>
<br><br>
 <input type="reset" name="reset">
 <input type="submit" name="Submit"> 

<br><br><br><br>

<h4>Don't have an Account ?</h4>

<a href="http://localhost/WT_Sami/Sami_Project/view/RegistrationMenu.php">Register Here</a>
</body>
</html>
