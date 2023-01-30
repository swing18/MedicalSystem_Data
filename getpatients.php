
<?php
$query = "SELECT firstname,lastname,ohipnum  FROM patient";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
echo "Which patient are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="ohipnum" value="';
        echo $row["ohipnum"] ;


        echo '">' . $row["firstname"]. " " . $row["lastname"] . " " . $row["ohipnum"]. "<br>";
   }
   mysqli_free_result($result);
?>



