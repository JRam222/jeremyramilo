<?php

include_once 'getProjects.php';;  

?>

<table>
  <tr>
    <th>Title</th>
    <th>Date</th>
    <th>Link</th>
    <th>Image Link</th>
    <th colspan="4"></th>
  </tr>

<?php
while($project = mysqli_fetch_assoc($result)){
    echo'
    <tr>
      <td>'.$project['title'].'</td>
      <td>'.$project['date'].'</td>
        <td>'.$project['link'].'</td>
        <td>'.$project['img'].'</td>
        <td><a href="edit.php?id='.$project['id'].'">Edit</a></td>
        <td><a href="delete.php?id='.$project['id'].'">Delete</a></td>
    </tr>
    ';
};

?>    
    
</table>
      

<h3>Add</h3>
<form method="post" action="insert.php">
    Title:<input type="text" name="title"/><br>
    Date:<input type="date" name="date"/><br>
    Link:<input type="text" name="link"/><br>
    Image Link:<input type="text" name="img"/><br>
    <input type="submit" name="submit"/>
</form>
