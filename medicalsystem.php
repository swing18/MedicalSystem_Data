<!--This is a comment. Comments are not displayed in the browser--><!--Programmer: 29-->
<!DOCTYPE html>
<html>
<head>
        <title>Medical System</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
<script src="getdata.js"></script>
<?php
 include "connectdb.php";
?>
<h1>The Medical System</h1>

<p>List all doctors: </p>
<form action="docinfo.php" method="post">
<select name="pickorder"  id="pickorder">
  <option value="1">Select Order</option>
  <option value="2">Last Name (Ascending)</option>
  <option value="3">Last Name(Descending)</option>
  <option value="4">Speciality (Ascending)</option>
  <option value="5">Speciality (Descending)</option>
</select>
<input type = "submit">
</form>

<h2>Our Specialities</h2>
<form action="getdocs.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Specialities"\>
</form>
<p>
<hr>
<p>
</form>
<p>
<hr>
<p>
<h2> ADD A NEW DOCTOR:</h2>
<form action="addnewdoc.php" method="post">
New Doctor's License Number: <input type="text" name="licensenum"><br>
New Doctor's First Name: <input type="text" name="firstname"><br>
New Doctor's Last Name: <input type="text" name="lastname"><br>
New Doctor's License Date: <input type="text" name="licensedate"><br>
New Doctor's Birth Date: <input type="text" name="birthdate"><br>
New Doctor's Speciality: <input type="text" name="speciality"><br>

For which hospital: <br>
<?php
include 'gethospitals.php';
?>
<input type="submit" value="Add New Doctor">
</form>

</form>
<p>
<hr>
<p>
<h2> DELETE A  DOCTOR:</h2>

<h2> DELETE A  DOCTOR:</h2>
<form action="deletedoc.php" method="post">
Doctor's License Number: <input type="text" name="licensenum"><br>
<input type="submit" value="Delete Doctor">
</form>

</form>
<p>
<hr>
<p>
<h2> DELETE A  DOCTOR FROM LIST:</h2>
<form action="deletedoc.php" method="post">
<?php
include 'getdocdelete.php';
?>
<input type="submit" value="Delete Doctor">
</form>

</form>
<p>
<hr>
<p>
<h2> CONNECT A DOCTOR WITH A PATIENT :</h2>
<form action="connect.php" method="post">
<?php
include 'getdocdelete.php';
?>
<?php
include 'getpatients.php';
?>
<input type="submit" value="connect Doctor to Patient">
</form>


<p>
<hr>
<p>
<h2> VIEW A DOCTORS PATIENTS :</h2>
<form action="seepatients.php" method="post">
<?php
include 'getdocdelete.php';
?>
<input type="submit" value="see patients by doctor">
</form>

<h2> View Hospitals:</h2>
<form action="seehospital.php" method="post">
<?php
include 'gethospitals.php';
?>
<input type="submit" value="See Hospital">
</form>



<p>
<hr>
<p>
<h2> EDIT HOSPITAL BEDS:</h2>
<form action="updatehospital.php" method="post">
<?php
include 'gethospitals.php';
?>
New number of beds: <input type="text" name="numofbeds"><br>

<input type="submit" value="Change Beds">
</form>
<?php
mysqli_close($connection);
?>
<body>
</html>



