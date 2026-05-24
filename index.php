<?php

include 'connect.php';

$stmt = $conn->prepare("SELECT * FROM klant");
$stmt->execute();

while ($row = $stmt->fetch()) {
     echo $row["naam"] . "<br>";
}