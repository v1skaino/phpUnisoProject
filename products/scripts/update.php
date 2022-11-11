<?php
require_once("../../connect.php");
if (isset($_GET['id']) && isset($_POST['editForm'])) {
    // Armazena os dados do input
    try {
    $id = $_GET['id'];
    $family = $_POST['family'];
    $storage_family = $_POST['storage_family'];
    $unit_measure = $_POST['unit_measure'];
    $created_at = $_POST['created_at'];
    $liberated_at = $_POST['liberated_at'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    

    $sql = "UPDATE `product` SET 
        `family`='$family',
        `storage_family`='$storage_family',
        `unit_measure`='$unit_measure',
        `status`='$status',
        `created_at`='$created_at',
        `liberated_at`='$liberated_at',
        `description`='$description' 
        WHERE id = $id";

$result = mysqli_query($conn, $sql);

    } catch (mysqli_sql_exception $e) { 
   var_dump($e);
   exit; 
}   
    
    if (mysqli_query($conn, $sql)) {
        echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2;URL=/www/myApp/products/screens/list.screen.php\">";
    } else {
        echo  'Ocorreu um erro interno.';
    }
} else {
    die("Erro ao enviar formulário");
}

?>

<html>
<link rel="stylesheet" href="../styles/loader.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<section class="content">
<div class="spinner-border" style="width: 3rem; height: 3rem; color: #343a40;"  role="status">
  <span class="visually-hidden"></span>
</div>
</section>
</html>
