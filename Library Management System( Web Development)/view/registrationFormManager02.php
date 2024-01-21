<?php
include '../control/registrationManagerControl02.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body >     

<form action="" method="POST" enctype="multipart/form-data">
<h1 ><b>Manager Registration</b></h1> </td><br><br>

<table  >
<tr>
    <td> Age  </td>
    <td> <input type="number" name="age"> </td>
</tr>
<tr>
    <td> Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
    <td>Contact Number </td>
    <td> <input type="text" name="contactNumber"> </td>
</tr>
<tr>
    <td> Email</td>
    <td> <input type="text" name="email"> </td>
</tr>
<tr>
    <td> NID Number</td>
    <td> <input type="text" name="nidNumber"> </td>
</tr>
<tr>
    <td>Attach NID </td>
    <td> <input type="file" name="filetoupload"> </td>
</tr>
</table>
<br><br><br><br>
 <input type="reset" name="reset"> 


 <input type="submit" name="Submit">


</table>
<br><br><br>
<h3><a href="http://localhost/WT_Sami/Sami_Project/view/LoginForm.php">Login Page</a></h3><br>




</body>


</html>
