
<?php
$query = "SELECT firstname,lastname, licensenum  FROM doctor";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Which doctor are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="licensenum" value="';
        echo $row["licensenum"];
        echo '">' . $row["firstname"]. " " . $row["lastname"] . " " . $row["licensenum"]. "<br>";
   }
   mysqli_free_result($result);
?>



