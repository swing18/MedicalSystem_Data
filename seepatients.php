<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctors</title>
</head>
<body>
<?php
include 'connectdb.php';

$licensenum= $_POST["licensenum"];
echo "<h2>" .$licensenum. "</h2>";
?>

<ol>
<?php

   $licensenum= $_POST["licensenum"];
   $query = 'SELECT *FROM looksafter WHERE licensenum="'. $licensenum .'"';
   $query = 'SELECT patient.firstname, patient.lastname, patient.ohipnum FROM patient LEFT JOIN looksafter ON patient.ohipnum=looksafter.ohipnum WHERE looksafter.licensenum ="' . $licensenum . '"';

   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "<table>";
    while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row[firstname] . "</td>";
            echo "<td>" . $row[lastname] . "</td>";
            echo "<td>" . $row[ohipnum] . "</td>";
            echo "</tr>";
           }
          echo "</table>";
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
