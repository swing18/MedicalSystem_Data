<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Medical Sytsem Connect</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your connections:</h1>
<ol>
<?php
   $licensenum =$_POST["licensenum"];
   $ohipnum =$_POST["ohipnum"];


   $query = 'INSERT INTO looksafter values("' . $licensenum . '","' . $ohipnum . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your connection was added!";
   mysqli_close($connection);
?>
</ol>
</body>

