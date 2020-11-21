

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-5">
     <div class="row">
        <div class="col-md-6 offset-md-3">
             <div class="card ">
              <div class="card-header bg-ddark ">CRUD Project</div>

              <div class="card-body">
               <a href="index.php" class="btn btn-dark ">Back</a>
                 <form action="" method='POST' enctype= "multipart/form-data">
                    <div class="form-gruop">
                    <label for="">Name</label>
                     <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-gruop">
                    <label for="">Image</label>
                     <input type="file" name="image" class="form-control">
                    </div>
                    <div class="card-footer">
                    
                     <input type="submit" name="submit" value="create" class="btn btn-success">
                    </div>
                 
                 </form>
              </div>
             </div>
        
        </div>
     
     </div>
    
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
 include('connect.php');
  
if($_SERVER['REQUEST_METHOD']== "POST")
{
   $name = $_POST['name'];
   
   $image_name = $_FILES['image']['name'];
   $tmp_name   = $_FILES['image']['tmp_name'];
   $path = "image/".$image_name;
   move_uploaded_file($tmp_name,$path);

   $sql = "insert into crud (name,image) values(?,?)";
   $res= $pdo->prepare($sql);
   $res->execute([$name,$image_name]);
   header('location:index.php?create=success');
   

}



?>