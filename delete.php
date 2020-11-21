
<?php 
include('connect.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "delete from crud where id = ?";
    $res = $pdo->prepare($sql);
    $res->execute([$id]);
    header('location:index.php?delete=success');

}
?>