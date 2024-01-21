<?php
include '../control/previewCustomerControl.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body style="text-align:center; background-color:#5F9EA0;font-family:verdana;">     

<form action="" method="POST" enctype="multipart/form-data">
    <body style="text-align:center; background-color:powderblue;font-family:verdana;">     



<h1 style="text-align:center;font-family:verdana; "><b>Customer Registration</b></h1> </td><br><br>
<h3> <u>Preview</u></h3>
    <table >
    Your Username is <?php echo $_SESSION["uname"]; ?> <br><br>
    Your Age is <?php echo $_SESSION["age"]; ?> <br><br>
    Your Gender is <?php echo $_SESSION["gender"]; ?> <br><br>
    Your Contact Number is <?php echo $_SESSION["contactNumber"]; ?> <br><br>
    Your Email is <?php echo $_SESSION["email"]; ?> <br><br>
  

    
    <input type="submit" name="Submit">
    </table>
    </body>

</html>