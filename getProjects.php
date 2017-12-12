<?php

include_once 'connect.php';

$sql ="SELECT * from projects";

$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

?>