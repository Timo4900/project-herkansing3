<?php

include 'connect.php';


$stmt = $conn->prepare("SELECT * FROM reservering");
$stmt->execute();
?>

