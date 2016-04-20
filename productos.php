<?php
include ('inc/data.php');

$pageTitle = 'Productos' ;
$section = 'productos';
include ('inc/header.php');

?>


    <div class="productos-div">

        <h1>Conoce nuestros productos</h1>

         <?php
            foreach ($productos as $producto) {
                echo "<div class='producto'><h1>"
                    . $producto["nombre"]
                    . "</h1><p>"
                    . $producto["descripcion"]
                    . "</p><img src='"
                    . $producto["img"]
                    ."'></img></div>";
            }
         
         
         ?>


    </div>

<?php include ('inc/footer.php'); ?>