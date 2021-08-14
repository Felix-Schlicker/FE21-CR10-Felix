<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {  
   $title = $_POST['title'];
   $image = $_POST['image'];
   $isbn = $_POST['isbn'];
   $short_description = $_POST['short_description'];
   $type = $_POST['type'];
   $author_first_name = $_POST['autor_first_name'];
   $author_last_name = $_POST['autor_last_name'];
   $publisher_name = $_POST['publisher_name'];
   $publisher_address= $_POST['publisher_adress'];
   $publish_date = $_POST['publisher_date'];
   $status = $_POST['status'];
   $uploadError = '';
   //this function exists in the service file upload.
   //$picture = file_upload($_FILES['picture']);  
 
   $sql = "INSERT INTO media (title, image, isbn, short_description, type, author_first_name, author_last_name, publisher_name, publisher_address, publish_date, status) ";
   $sql .= "VALUES ('$title', '$image', '$isbn', '$short_description', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$status');";

   if (mysqli_query($connect, $sql) === true) {
       $class = "success";
       $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $short_description </td>
            </tr></table><hr>";
       

   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
       
   }
   mysqli_close($connect);
} else {
   header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Update</title>
       <?php require_once '../components/boot.php'?>
   </head>
   <body>
       <div class="container">
           <div class="mt-3 mb-3">
               <h1>Create request response</h1>
           </div>
           <div class="alert alert-<?=$class;?>" role="alert">
               <p><?php echo ($message) ?? ''; ?></p>
               
               <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
           </div>
       </div>
   </body>
</html>