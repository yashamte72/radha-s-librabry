<?php
$host = "localhost";
$port = "5432";
$dbname= "postgres";
$user = "yash";
$password = "1234";

$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$con) {
   echo "unable to connect";
   
}
// else {
//     echo "connected succefully";
// }
