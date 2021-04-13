<!DOCTYPE html>
<html>
<body>

<h1>Input your custom Google Maps Marker here!*</h1>
<h2>*this page would be accessible only to admin users</h2>
<form action="index.php" method="post">
  <label for "name">Location:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for "lat">Latitude:</label>
  <input type="number" step="0.0001" id="lat" name="lat"><br><br>
  <label for "lng">Longitude:</label>
  <input type="number" step="0.0001" id="lng" name="lng"><br><br>
  <label for "comment">Comment:</label>
  <input type="text" id="comment" name="comment"><br><br>
  <label for "professor">Professor:</label>
  <input type="text" id="professor" name="professor"><br><br>
  <label for "link">Link:</label>
  <input type="text" id="link" name="link"><br><br>
  <input type="submit" value="Submit">
  
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "qVP2nWjiLHuLJd";
$dbname = "ist351";

  //create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
   //check connection
     if ($conn->connect_error) {
     	die("Connection Failed: " . $conn->connect_error);
     	  }
     	  ?>
     	  </body>
     	  </html>

