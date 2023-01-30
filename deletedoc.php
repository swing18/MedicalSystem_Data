<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Medical Sytsem Your Doctors</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Delete Doctor:</h1>
<ol>
<?php

   $licensenum =$_POST["licensenum"];

   $query = 'DELETE FROM doctor WHERE licensenum= "' . $licensenum . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: delete failed" . mysqli_error($connection));
    }
   echo "Your doctor was deleted!";
   mysqli_close($connection);
?>
</ol>
</body>
