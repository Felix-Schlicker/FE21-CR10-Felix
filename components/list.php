<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM media";
$result = mysqli_query($connect, $sql);
$tbody=''; //this variable will hold the body for the table
echo "<table id='list' class='table table-striped'>";
echo createHeader();
echo "<tbody>";
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       echo createRow($row);
    };   
} else {
   
}
echo "</tbody>";
echo "</table>";
mysqli_close($connect);
function createHeader (){
       return "<thead class='table-success'>
                   <tr>
                    <th>image</th>
                       <th>title</th>
                       <th>type</th>
                      <th>isbn</th>
                      <th>status</th>
                       <th>Detail<th>
                       <th>delete</th>
                       <th>update</th>
                    </tr>
               </thead>";
}

function createRow($row){
    return "<tr> 
        <td><img src='{$row['image']}' alt='{$row['title']}' class='img-thumbnail'> </td>
        <td>{$row['title']}</td>
        <td>{$row['type']}</td>
        <td style='white-space: nowrap;'>{$row['isbn']}</td>
        <td><span class='{$row['status']}'>{$row['status']}</span></td> 
        <td><a class='btn btn-outline-success' href='detail.php?id={$row['id']}'>Detail</a></td>
        <td><a class='btn btn-outline-danger' href='delete.php?id={$row['id']}'>Delete</a></td>
        <td><a class='btn btn-outline-warning' href='update.php?id={$row['id']}'>Update</a></td>
        </tr>" ;
}
?>



 






                 

          