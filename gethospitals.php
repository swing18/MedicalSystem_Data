<?php
$query = "SELECT DISTINCT hosworksat  FROM doctor";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Which hosptial are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="hosworksat" value="';
        echo $row["hosworksat"];
        echo '">' . $row["hosworksat"]. "<br>";
   }
   mysqli_free_result($result);
?>
