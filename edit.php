

<?php

    include_once "connect.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $res = mysqli_query($conn,"SELECT * from projects WHERE id=$id");
        $project = mysqli_fetch_array($res);
    }

    if(isset($_POST['newTitle'])){
        $newTitle = $_POST['newTitle'];
        $id = $_GET['id'];
        $newDate = $_POST['newDate'];
        $newLink = $_POST['newLink'];
        $newImg = $_POST['newImg'];
        
        $sql = "UPDATE projects SET title='$newTitle',date='$newDate',link='$newLink',img='$newImg'  WHERE id='$id' ";
        $res = mysqli_query($conn, $sql) or die("could not update" .mysql_error());
        header("Location: /projects.php");
    }
    
    

?>

<form method="POST" action="edit.php?id=<?php echo $project[0]; ?>">
    Title:<input type="text" name="newTitle" value ="<?php echo $project[1]; ?>"/><br>
    Date:<input type="date" name="newDate"  value ="<?php echo $project[2]; ?>"/><br>
    Link:<input type="text" name="newLink" value ="<?php echo $project[3]; ?>" /><br>
    Image Link:<input type="text" name="newImg" value ="<?php echo $project[4]; ?>"/><br>
    <input type="submit" value="Update"/>
</form>