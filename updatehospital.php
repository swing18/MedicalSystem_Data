<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Medical Sytsem Change Beds</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Edited Beds:</h1>
<ol>
<?php
   $hoscode= $_POST["hosworksat"];
   $numofbeds = $_POST["numofbeds"];

   $query = 'UPDATE hospital SET numofbed= "' . $numofbeds . '" WHERE hoscode = "' . $hoscode . '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: update failed" . mysqli_error($connection));
    }
   echo "Your beds were edited!";
   mysqli_close($connection);
?>
</ol>
</body>



