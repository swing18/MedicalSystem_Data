<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Medical System</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your doctors:</h1>
<ol>
<?php
   $whichOwner= $_POST["speciality"];
   $query = 'SELECT * FROM doctor WHERE speciality ="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstname"]. " " . $row["lastname"] ;
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
