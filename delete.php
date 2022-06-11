<?php
include 'connect.php';

$id = $_GET['id'];
$q = "DELETE FROM `userinfo` WHERE id = $id";

$query = mysqli_query($con, $q);

header('location:message.php');


?>