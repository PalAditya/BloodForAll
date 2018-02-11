<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaderbord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<style>
td{
  color: white;
}
.rowf:after{
  content: "";
  display: table;
  clear:both;
  text-align: center;
  margin: auto;
}
.teal a:hover{
color: white;
}
</style>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $district=test_input($_POST["district"]);
  $city=test_input($_POST["city"]);
  $bgroup=test_input($_POST["bgroup"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}?>
<?php 
		
       $servername = "localhost";  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('testing',$conn) or die("unable to connect to database"); 
	   $sql1=mysql_query("SELECT * FROM blooddonators WHERE bgroup='$bgroup' AND district='$district'");
	   $me=array();
	   while ($temp = mysql_fetch_assoc($sql1))
		   $me[]=$temp;
	   $sql2=mysql_query("SELECT * FROM blooddonators WHERE bgroup='$bgroup' AND city='$city' AND district!='$district'");
	   $me2 = array();
		while ($temp = mysql_fetch_assoc($sql2))
		$me2[] = $temp;
	
	   ?>
<header style="background:white;">
    <div class="header-row1">
      <a href="http://www.iitbbs.ac.in"><img src='http://www.iitbbs.ac.in/images/iitbbs_logo.png' height='100%' alt='IIT Bhubaneswar'/></a>
      <a href="http://2018.almafiesta.com/"><img src='http://almafiesta.com/alma.png' height='100%' alt='almafiesta'/></a>
    </div>
  </header>
     <div class="containerh teal borderYtoX">
      <a href="abt.html">ABOUT</a>
      <a href="signup.html">SIGNUP</a>
      <a href="ldr.html">LEADERBOARD</a>
      <a href="rules.html">RULES</a>
      <a href="cus.html">CONTACT US</a>
  </div>
<h2 style="color: #3cad40; text-align: center;">LEADERBOARD</h2>
      <table class="zebra">
       
        <thead>
          <tr>
            <th>#</th>        
            <th>Donator</th>
            <th>Contact number</th>
          </tr>
        </thead>
        <?php // start a table tag in the HTML
$count=1;
foreach ($me as $user)
{   //Creates a loop to loop through results
//echo $user['district']." "."</br>";
//if($user['district']==$dist&&$user['name']!=$s)
//
	//echo "Umm</br>";
echo "<tr><td>".$count."</td>"."<td>" . $user['name'] . "</td><td>" . $user['mobno'] . "</td></tr>";  //$row['index'] the index here is a field name
$count=$count+1;
//
}
foreach ($me2 as $user)
{   //Creates a loop to loop through results

echo "<tr><td>".$count."</td>"."<td>" . $user['name'] . "</td><td>" . $user['mobno'] . "</td></tr>";  //$row['index'] the index here is a field name
$count=$count+1;
}
echo "</table>";
		?>

      </table>
	  <?php
	  if($count==1)
		  echo "Sorry";
	  ?>
   <div class= "rowff"><strong></br><h5 style="color: white; font-size: 16px;">
     <a href="http://2018.almafiesta.com/" style="text-align: center;margin: auto;">Almafiesta </a>© Copyright 2018, All Rights Reserved |Web Development Team|</h5></strong></div>
</body>
</html>