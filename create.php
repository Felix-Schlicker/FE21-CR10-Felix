<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <?php include "components/boot.php" ?>
   
</head>
<body>
    <fieldset>
           <legend class='h2'>Add Media</legend>
           <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
               <table class='table'>
                   <tr>
                       <th>Title</th>
                       <td><input class='form-control' type="text" name="title"  placeholder="Product Name" /></td>
                   </tr>   
                   <tr>
                       <th>Image</th>
                       <td><input class='form-control' type="text" name= "image" placeholder="Price" step="any" /></td>
                   </tr>
                   <tr>
                       <th>ISBN</th>
                       <td><input class='form-control' type="text" name="isbn" /></td>
                   </tr>
                   <tr>
                       <th>Short Description</th>
                       <td><textarea class='form-control' type="text" name="short_description"  placeholder="Product Name" ></textarea></td>
                   </tr>   
                   <tr>
                       <th>Type</th>
                       <td> 
                        <select name="type">
                         <option disabled selected value> -- Select a Type -- </option>
                                <option value="Book">Book</option>
                                <option value="DVD">DVD</option>
                                <option value="CD">CD</option>
  
                        </select></td>
                   </tr>
                   <tr>
                       <th>Author First Name</th>
                       <td><input class='form-control' type="text" name="autor_first_name" /></td>
                   </tr>
                   <tr>
                       <th>Author Last Name</th>
                       <td><input class='form-control' type="text" name="autor_last_name"  placeholder="Product Name" /></td>
                   </tr>   
                   <tr>
                       <th>Publisher Name</th>
                       <td><input class='form-control' type="text" name= "publisher_name" placeholder="Price" step="any" /></td>
                   </tr>
                   <tr>
                       <th>Publisher Adress</th>
                       <td><input class='form-control' type="text" name="publisher_adress" /></td>
                   </tr>
                   <tr>
                       <th>Publisher Date</th>
                       <td><input class='form-control' type="date" name="publisher_date"  placeholder="Product Name" /></td>
                   </tr>   
                   <tr>
                       <th>Status</th>
                       <td> <select class='form-control' name="status">
                           <option disabled selected value> -- Select a Status -- </option>
                                <option value="available">available</option>
                                <option value="reserved">reserved</option>
                    </select></td> 
                   </tr>
                  
                   <tr>
                       <td><button class='btn btn-success' type="submit">Insert Media</button></td>
                       <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                   </tr>
               </table>
           </form>
       </fieldset>
</body>
</html>