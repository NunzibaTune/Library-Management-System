<?php
include '../control/registrationCustomerControl01.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body style="text-align:center; background-color:#5F9EA0;font-family:verdana;">     

<form action="" method="POST" enctype="multipart/form-data">
<h1 style="text-align:center;font-family:verdana;"><b>Customer Registration</b></h1> </td><br><br>
<table style="text-align:left;" >

<tr>
    <td> Username </td>
    <td> <input type="text" name="name"> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td>
</tr>

</table>
<br><br><br><br>
 <input type="reset" name="reset">
 <input type="submit" name="Submit">



<br><br><br>
<h3><a href="http://localhost/WT_Sami/Sami_Project/view/LoginForm.php">Login Page</a></h3><br>

</body>


</html>
