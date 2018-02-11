<?php  
        $servername = "localhost";  
       $username = "root";  
       $password="";   
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('testing',$conn) or die("unable to connect to database"); 
	   //echo $conn;
	   //echo "</br>";
	   //echo $sql;
	   //echo "</br>";
?>
<?php
// define variables and set to empty values
$un=$pw="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $un = test_input($_POST["un"]);
  $pw=test_input($_POST["pw"]);
  //echo $un;
  //echo "<br>";
  //echo $pw;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
		
		$sql3 = ("SELECT mobno FROM blooddonators WHERE name='$un' AND Password='$pw'" );
		$result=mysql_query($sql3);
		//echo $result;
	  $row = mysql_fetch_array($result);
	  //echo $row;
	  if($row[0]>-1)
	  {
	  //echo $row[0];
	  //echo "<script type='text/javascript'>;alert('Pause')</script>";
		//$use=$levels[$row[0]];
		if(isset($_COOKIE['name']))
			setcookie('name', "",time() - 3600);
		$_COOKIE['name'] = $un;
		//settype($use, "string");
		setcookie('name',$un);
		echo $un." ".$row[0]." ".$pw;
		//echo $_COOKIE['Username'];
	  			//echo "<script type='text/javascript'>;window.location.href='www.google.com';</script>";
	  }
	  else
	  {
		  $message="Invalid username or password";
		  //echo "<script type='text/javascript'>;alert('$message');window.location.href='www.youtube.com';</script>";
	  }
	  
?>