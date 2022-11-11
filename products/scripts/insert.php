<?php 
//Chama o script de conexão
    require_once("../../connect.php"); 
    if (isset($_POST['submit'])){ 
       
        // Armazena os dados do input
        $family = $_POST['family']; 
        $storage_family = $_POST['storage_family']; 
        $unit_measure = $_POST['unit_measure']; 
        $created_at = $_POST['created_at']; 
        $liberated_at = $_POST['liberated_at']; 
        $description = $_POST['description']; 
        $status = $_POST['status']; 

        //Realiza a query no banco
        $sql = "INSERT INTO product (family,storage_family,unit_measure,status,created_at,liberated_at,description)
        VALUES ('$family','$storage_family','$unit_measure','$status','$created_at','$liberated_at','$description')";
        if (mysqli_query($conn, $sql)) {
            echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2;URL=/www/myApp/products/screens/list.screen.php\">";
        } else {
            $error_msg = 'Ocorreu um erro interno.';
        }
        mysqli_close($conn);
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
