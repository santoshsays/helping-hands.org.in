<?php
$server_name="localhost";
$db_username="root";
$db_password="";
$db_name="dbhelping";

$con=mysqli_connect($server_name,$db_username,$db_password);
$dbconfig=mysqli_select_db($con,$db_name);

if($dbconfig)
{
    //echo "Database Connected":
}
else {
    echo "Database Connection failed";
}

?>