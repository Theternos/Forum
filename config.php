<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'e-summit');



//define('DB_SERVER', 'sql6.freesqldatabase.com');
//define('DB_USERNAME', 'sql6516972');
//define('DB_PASSWORD', 'GDDVbnxLWi');
//define('DB_NAME', 'sql6516972');



/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>