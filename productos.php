<?php
include ('inc/data.php');

$pageTitle = 'Productos' ;
$section = 'productos';
include ('inc/header.php');

?>


    <div class="productos-div">
<!--
        <h2>Conoce nuestros productos</h2>-->

         <?php
            foreach ($productos as $producto) {
                echo "<div class='producto container'><h1>"
                    . $producto["nombre"]
                    . "</h1><div class='col-xs-6'><p>"
                    . $producto["descripcion"]
                    . "</p></div><div class='col-xs-6'><img src='"
                    . $producto["img"]
                    ."'></img></div></div>";
            }
         
         
         ?>


    </div>

<?php include ('inc/footer.php'); ?>