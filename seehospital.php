<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctors</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the hospital data:</h1>
<ol>

<?php
   $hoscode= $_POST["hosworksat"];

   $query = 'SELECT * FROM hospital WHERE hoscode="' . $hoscode . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");

     }
    echo "<table>";
    while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['hosname'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['prov'] . "</td>";
            echo "<td>" . $row['numofbed'] . "</td>";
            $headcode = $row['headdoc'];

            echo "</tr>";
           }
          echo "</table>";

   $query = 'SELECT * FROM doctor WHERE licensenum ="' . $headcode . '"';
   $result=mysqli_query($connection,$query);
   if (!$result) {
        die("database query2 failed.");
    }
   while ($row=mysqli_fetch_assoc($result)) {

       echo "The head of this hospital is:<br>";
       echo $row["firstname"]. " " . $row["lastname"] ;
    }

   $query = 'SELECT * FROM doctor WHERE hosworksat ="' . $hoscode . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstname"]. " " . $row["lastname"] ;
     }


   mysqli_close($connection);
?>
</body>
</html>

