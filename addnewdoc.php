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
<h1>Here are your doctors:</h1>
<ol>
<?php
   $firstname= $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $licensenum =$_POST["licensenum"];
   $licensedate= $_POST["licensedate"];
   $birthdate= $_POST["birthdate"];
   $hosworksat =$_POST["hosworksat"];
   $speciality =$_POST["speciality"];
   $query = 'INSERT INTO doctor values("' . $licensenum . '","' . $firstname . '","' . $lastname . '","' . $licensedate . '","' . $birthdate . '","' . $hosworksat . '","' . $speciality . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your doctor was added!";
   mysqli_close($connection);
?>
</ol>
</body>
