<?php
    require_once("../../connect.php");
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM `product` WHERE id = $id";
        if($conn->query($sql) === TRUE){
            echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2;URL=/www/myApp/products/screens/list.screen.php\">";
        } else {
            echo "Erro";
            echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2;URL=/www/myApp/products/screens/list.screen.php\">";

        }

    } else {
        die("Erro ao deletar");
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
