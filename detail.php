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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "components/boot.php" ?> 
</head>
<body>
  <div class= "container">
    <h1>Details of <?php echo $title ?></h1>
      <div class="card ">
        <div class="row no-gutters">
            <div class="col-auto">
                <img src="<?php echo $image ?>" class="img-fluid" alt="<?php echo $title ?>">
            </div>
            <div class="col">
                <div class="card-block px-2">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    <p class="card-text"><?php echo $short_description ?></p>
                    <p class="card-text">Author: <?php echo $author_first_name ?> <?php echo $author_last_name ?></p>
                    <p class="card-text">Publisher: <?php echo $publisher_name?> <?php echo $publisher_address?> </p>
                    <p class="card-text">Publish Date: <?php echo $publish_date ?></p>
                   
                </div>
            </div>
        </div>
        <div class="card-footer w-100 text-muted pb-3">
            Status: <?php echo $status ?>, Type: <?php echo $type ?>, ISBN: <?php echo $isbn ?>
        </div>
  </div> <br>
  <a href="index.php" class="btn btn-outline-primary">Home</a>
  <a href="update.php?id=<?php echo $id ?>"  class="btn btn-outline-warning">Edit</a>
  <a href="delete.php?id=<?php echo $id ?>" class="btn btn-outline-danger">Delete</a>
    
</div>
</div>
</body>
</html>