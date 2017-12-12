<?php

include_once "connect.php";

$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$link = mysqli_real_escape_string($conn, $_REQUEST['link']);
$img = mysqli_real_escape_string($conn, $_REQUEST['img']); 

// attempt insert query execution
$sql = "INSERT INTO projects (title, date, link,img) VALUES ('$title', '$date', '$link', '$img')";
if(mysqli_query($conn, $sql)){
    header("Location: /projects.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// close connection
mysqli_close($conn);
?>
