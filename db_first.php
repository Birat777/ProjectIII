<?php
require_once 'Database.php';
$db = new Database();
$conn = $db->getConnection();

if($conn){
    echo "Database connected successfully";
}else{
    echo "Not connected";
}
?>