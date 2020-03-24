<?php
// DATABASE CONNECTION STRING

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '123');
define('DATABASE_NAME', 'calendar1');

//Connect and select the database
$db = new mysqli(HOST, USERNAME, PASSWORD, DATABASE_NAME);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>