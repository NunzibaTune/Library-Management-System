<?php
include '../control/registrationCustomerControl02.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body style="text-align:center; background-color:#5F9EA0;font-family:verdana;">     

<form action="" method="POST" enctype="multipart/form-data">
<h1 style="text-align:center;font-family:verdana; "><b>Student Registration</b></h1> </td>
<br><br><br>
<table style="text-align:left;"  >

<tr>
    <td> Age </td>
    <td> <input type="number" name="age"> </td>
</tr>
<tr>
    <td>Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
<tr>
    <td> Contact Number </td>
    <td> <input type="text" name="contactNumber"> </td>
</tr>
<tr>
    <td> Email </td>
    <td> <input type="text" name="email"> </td>
</tr>


</table>
<br>
 <input type="reset" name="reset">


 <input type="submit" name="Submit">
<br><br>
<h3><a href="http://localhost/WT_Sami/Sami_Project/view/LoginForm.php">Login Page</a></h3><br>


</body>


</html>
