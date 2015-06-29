<?php
$servername = "localhost";
$username = "clts_appadmin";
$password = "nG{2liKGM?[n";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysql_select_db('clts_app',$conn);
?> 