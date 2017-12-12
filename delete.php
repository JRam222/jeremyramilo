<?php

    include_once "connect.php";
    // sql to delete a record
    
    $id = $_GET['id'];
        
    $sql = "DELETE FROM projects WHERE id=$id";
        

    if ($conn->query($sql) === TRUE) {
        header("Location: /projects.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }


    $conn->close();

?>