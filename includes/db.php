<?php
$db = new mysqli("localhost","root","","aynou-shop");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>