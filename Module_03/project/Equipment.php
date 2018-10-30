<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <style>
  body {background-color: black}
  p {color: white}
</style>
</head>
<body>
<div>
  <h1 style= "color: white; text-align: center">
    <a href="cis3801_Index.html">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfjr6eDKjdja8OI9tyuct2GOcpxfriAKwXmVvWi3vCa6CN0Qk9"  style="float:left;width:120px;height:120px">
    </a>
    GhostStop
    <img src="http://4.bp.blogspot.com/-M_KMM-zd66o/VFmJBVU9t-I/AAAAAAAAGhA/c5lQXpbalv4/s1600/cartoon+ghost.png" style="width:120px;height=120px;float:right"/>
  </h1>
</div>
  </br>
  </br>
  <div style= "background-color: red; width:120px">
    <ul>
  <li><a href="cis3801_Index.html">Home</a></li>
  <li><a href="Construction.html">Evidence</a></li>
  <li><a href="Equipment.php">Equipment</a></li>
  <li><a href="Contruction.html">About Us</a></li>
</ul>
  </div>
  <h2 style= "color: white;">Equipment</h2>
<div style= "color: white;">
  <?php
  $servername = "localhost:3306";
  $username = "rameya93";
  $password = "Avengers4Disney";
  $db_name = "demo";

  // Make a MySQL Connection
  $conn= new mysqli ($servername, $username, $password, $db_name);

  // check for connection error
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      echo "connected failed";
  }

  // Query the desired table in the database and have it return a row
  $sql = "SELECT * FROM equipment";
  $result = $conn->query($sql);

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){

echo "Product:" .$row["Product"]. " Price:" .$row["Price"]. " Reward Tokens:" .$row["Reward Tokens"]. " Availability:" .$row["Availablity"]. "<br>";
}
}else{
  echo "0 results";
}
  $conn->close();
  ?>
</div>
</body>
</html>
