<!DOCTYPE html>
<html>
<head>
<title>GhostStop</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body {background-color: black;}
  p {color: white}
* {
  box-sizing: border-box;
}
.header img {
  float: left;
  width: 100px;
  height: 100px;
  //background: #555;
}
.header h1 {
  color: white;
  position: relative;
  Text-align: center;
  top: 18px;
  left: 10px;
}
.menu {
background-color: red;
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
}
.main {
  float: left;
  width: 60%;
  padding: 0 20px;
  overflow: hidden;
}
.right {
  float: left;
  width: 20%;
  padding: 10px 15px;
  margin-top: 7px;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;">
<div class="header"; style="padding:20px;">
  <a href="cis3801_Index.html">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfjr6eDKjdja8OI9tyuct2GOcpxfriAKwXmVvWi3vCa6CN0Qk9">
  </a>
<h1>GhostStop</h1>
</div>
<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem"><a href="cis3801_Index.html">Home</a></div>
    <div class="menuitem"><a href="About Us.html">About Us</a></div>
    <div class="menuitem"><a href="Equipment.php">Equipment</a></div>
    <div class="menuitem"><a href="Construction.html">Evidence</a></div>
  </div>
  <div class="main">
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
</div>
  <div class="right">
     <img src="https://www.ghoststop.com/v/vspfiles/photos/Camcorder-FSPOVCam-3T.jpg" alt="W3Schools.com" width="104" height="142">
 <img src="https://www.ghoststop.com/v/vspfiles/photos/CASE-GSPOUCH-2T.jpg" alt="W3Schools.com" width="104" height="142">
  </div>
</div>
</body>
</html>
