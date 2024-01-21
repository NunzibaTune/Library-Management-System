<?php
include '../control/registrationStudentControl01.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body >     

<form action="" method="POST" enctype="multipart/form-data">
<h1 ><b>Student Registration</b></h1> </td><br><br>
<table style="text-align:left;" >
<tr>
    <td>Username </td>
    <td> <input type="text" name="name"> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td><br>
</tr>
</table>
<br><br><br><br>
 <input type="reset" name="reset">
 <input type="submit" name="Submit">



<br><br><br>
<h3><a href="http://localhost/WT_Sami/Sami_Project/view/LoginForm.php">Login Page</a></h3><br>



</body>


</html>
