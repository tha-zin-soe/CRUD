<?php
 include('connect.php');

?>

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
               <a href="create.php" class="btn btn-success">Create</a>

               <?php
               if(isset($_GET['create']))
               {
                   ?>
                    <div class="alert alert-success">Created Success</div>

                   <?php
               }
               
               ?>
                <?php
               if(isset($_GET['update']))
               {
                   ?>
                    <div class="alert alert-success">Updated Success</div>

                   <?php
               }
               
               ?>


        <?php
               if(isset($_GET['delete']))
               {
                   ?>
                    <div class="alert alert-danger">Deleted Success</div>

                   <?php
               }
               
               ?>
               


              
                <table class="table table-striped">
                 <tr>
                 <th>NO</th>
                 <th>image</th>
                 <th>name</th>
                 <th>Option</th>
                 </tr>
                <?php
                $sql = "select * from crud";
                $data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach($data as $item)
                {
                ?>

                        <tr>
                            <td><?php echo $item['id'];?></td>
                            <td>
                               <img src="image/<?php echo $item['image'];?>" width="100px" style="border-radius:10%;" alt=""> 
                            </td>
                            <td><?php echo $item['name'];?></td>
                            <td>
                                <a href="update.php?id=<?php echo $item['id'];?>" class="btn btn-info">Update</a>
                                <a href="delete.php?id=<?php echo $item['id'];?>" class="btn btn-danger">Delete</a>
                            </td>
                 
                         </tr> 



                <?php
                }
                
                ?>
                        
                  
                 
                </table>
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