<?php
include '../control/previewManagerControl.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> Library Management System </title>
    </head>
<body >     

<form action="" method="POST" enctype="multipart/form-data">
<h1 style="text-align:center;font-family:verdana; "><b>Manager Registration</b></h1> </td><br><br>
<h3> <u>Preview</u></h3>
    <body >
    <table >
    Your Username is <?php echo $_SESSION["uname"]; ?> <br><br>
    Your Age is <?php echo $_SESSION["age"]; ?> <br><br>
    Your Gender is <?php echo $_SESSION["gender"]; ?> <br><br>
    Your NID Number is <?php echo $_SESSION["nidNumber"]; ?> <br><br>
    Your Contact Number is <?php echo $_SESSION["contactNumber"]; ?> <br><br>
    Your Email is <?php echo $_SESSION["email"]; ?> <br><br><br>
    <input type="submit" name="Submit">
    </table>
    </body>

</html>