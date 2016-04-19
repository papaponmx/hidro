<?php
include ('inc/data.php');
include ('inc/functions.php');

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($galeria[$id])) {
        $objeto = $galeria[$id];
    }

}

if (!isset($objeto)) {
    header("location:galeria.php");
    exit;
}


$pageTitle = $objeto["titulo"];
$section= null;
include ('inc/header.php');

?>



<div class="wrapper">

    <div class="imagen-completa">
        <span>
            <img src="<?php echo $objeto['img']?>" alt="<?php echo $objeto['titulo'];?>" />
        </span>
    </div>
    <div class="detalles">
        <h1> <?php echo $objeto['titulo'];?></h1>
        <table>
          <tr>
                <th>Ubicacion</th>
                <td><?php echo $objeto["ubicacion"]?></td>
          </tr>
            <tr>
                <th>Tipo de sistema</th>
                <td><?php echo $objeto["tipo de sistema"]?></td>
            </tr>
            <tr>
                <th>Año</th>
                <td><?php echo $objeto["año"]?></td>
            </tr>
        </table>
    </div>

</div>







<?php include('inc/footer.php');
