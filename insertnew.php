
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db_name="cc";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$fname=$_POST['First_Name'];
$lname=$_POST['Last_Name'];
//$bd=$_POST['Birthday_Day'];
//$bd=$_POST['Birthday_Month'];
//$bd=$_POST['"Birthday_Year'];
$dept=$_POST['DEPARTMENT'];
$ei=$_POST['Email_Id'];
$mn=$_POST['Mobile_Number'];
$uname=$_POST['username'];
$pw=$_POST['password'];
$cty=$_POST['City'];
$pc=$_POST['Pin_Code'];
$st=$_POST['State'];
$cn=$_POST['Country'];
//$name=$_POST['First_Name'];
//$name=$_POST['First_Name'];
//$name=$_POST['First_Name'];
//$name=$_POST['First_Name'];
$q = "INSERT INTO
         student_record(firstn,lastn,department,email,mobile,username,password,city,pincode,state,country) 
      VALUES('$fname','$lname','$dept','$ei','$mn','$uname','$pw','$cty','$pc','$st','$cn')";
$r=mysql_query($q);
if($r) {
 echo "SUCCESSFULLY REGISTERED";
else {
    echo mysql_error();
}
?>
