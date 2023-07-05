<?php
$db = new mysqli("localhost","root","","beautifulLady");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>