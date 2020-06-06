
<?php
$server="localhost";
$username="root";
$pass="";
$dbname="project";

$dbcon = mysqli_connect("localhost","root","","project");
if($dbcon){
	 "Database Connected";
}
else{
	echo "Database not connected";
}
?>