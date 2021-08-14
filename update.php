<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM media WHERE id = {$id}";
   $result = mysqli_query($connect, $sql);
   if (mysqli_num_rows($result) == 1) {
       $data = mysqli_fetch_assoc($result);
       $title = $data['title'];
       $image  = $data['image'];
       $isbn = $data['isbn'];
        $short_description = $data['short_description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address =$data['publisher_address'];
        $publish_date = $data['publish_date'];
        $status = $data['status'];  
        
       
   }
   mysqli_close($connect);
} else {
   header("location: error.php");
}
?>


<!DOCTYPE html>
<html>
   <head>
       <title>Edit Media</title>
       <?php require_once 'components/boot.php'?>
       <style type= "text/css">
           fieldset {
               margin: auto;
               margin-top: 100px;
               width: 60% ;
           }  
           .img-thumbnail{
               width: 70px !important;
               height: 70px !important;
           }    
       </style>
   </head>
   <body>
       <fieldset>
           <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
           <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
               <table class="table">
                   
                          <tr>
                       <th>Title</th>
                       <td><input class='form-control' type="text" name="title"  placeholder="Title" value ="<?php echo $title ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Image</th>
                       <td><input class='form-control' type="text" name= "image" placeholder="Image" step="any" value ="<?php echo $image ?>" /></td>
                   </tr>
                   <tr>
                       <th>ISBN</th>
                       <td><input class='form-control' type="text" name="isbn" placeholder="ISBN" value ="<?php echo $isbn ?>" /></td>
                   </tr>
                   <tr>
                       <th>Short Description</th>
                       <td><textarea class='form-control' type="text" name="short_description"  placeholder="Short Description" ><?php echo $short_description ?></textarea></td>
                   </tr>   
                   <tr>
                       <th>Type</th>
                       <td> 
                        <select name="type">
                         <option disabled> -- Select a Type -- </option>
                                <option value="Book" <?php if ($type === "Book") echo "selected" ?>>Book</option>
                                <option value="DVD" <?php if ($type === "DVD") echo "selected" ?>>DVD</option> 
                                <option value="CD" <?php if ($type === "CD") echo "selected" ?>>CD</option>
  
                        </select></td>
                   </tr>
                   <tr>
                       <th>Author First Name</th>
                       <td><input class='form-control' type="text" name="author_first_name" placeholder="Author First Name" value ="<?php echo $author_first_name ?>" /></td>
                   </tr>
                   <tr>
                       <th>Author Last Name</th>
                       <td><input class='form-control' type="text" name="author_last_name"  placeholder="Author Last Name" value ="<?php echo $author_last_name ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Publisher Name</th>
                       <td><input class='form-control' type="text" name= "publisher_name" placeholder="Publisher Name" step="any" value ="<?php echo $publisher_name ?>" /></td>
                   </tr>
                   <tr>
                       <th>Publisher Address</th>
                       <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher Address" value ="<?php echo $publisher_address ?>"/></td>
                   </tr>
                   <tr>
                       <th>Publish Date</th>
                       <td><input class='form-control' type="date" name="publish_date"  placeholder="Publish Date" value ="<?php echo $publish_date ?>" /></td>
                   </tr>   
                   <tr>
                       <th>Status</th>
                       <td> <select class='form-control' name="status">
                           <option disabled> -- Select a Status -- </option>
                                <option value="available" <?php if ($type === "available") echo "selected" ?>>available</option>
                                <option value="reserved" <?php if ($type === "reserved") echo "selected" ?>>reserved</option>
                    </select></td> 
                   </tr>
                       <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />

                        
                       <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                       <td><a href= "index.php"><button class="btn btn-warning" type="button">List</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
   </body>
</html>

