<?php

include 'connectdb.php';

 $pickorder = $_POST["pickorder"];

 if($pickorder == "2"){
    $query = "SELECT * FROM doctor ORDER BY lastname ASC;";
 }
 elseif($pickorder == "3"){
    $query = "SELECT * FROM doctor ORDER BY lastname DESC;";
 }
 elseif($pickorder == "4"){
    $query = "SELECT * FROM doctor ORDER BY birthdate ASC;";
 }
 elseif($pickorder == "5"){
    $query = "SELECT * FROM doctor ORDER BY birthdate DESC;";
 }
 else{
    $query = "SELECT * FROM doctor;";
 }



 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }

echo "<table border='1'>
<tr>
<th>License Number</th>
<th>First Name</th>
<th>Last Name</th>
<th>license date</th>
<th>birthdate</th>
<th>hospital works at</th>
<th>speciality</th>
</tr>";

  while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['licensenum'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['licensedate'] . "</td>";
            echo "<td>" . $row['birthdate'] . "</td>";
            echo "<td>" . $row['hosworksat'] . "</td>";
            echo "<td>" . $row['speciality'] . "</td>";
            echo "</tr>";
           }
          echo "</table>";


 mysqli_free_result($result);
?>

