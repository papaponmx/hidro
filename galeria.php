<?php
$pageTitle = 'Galería' ;
$section= 'galeria';
include ('inc/header.php');
include ('inc/data.php');
include ('inc/functions.php');
?>

<div class="wrapper galeria">

 <h1> <?php echo $pageTitle; ?></h1>

    <div class="container-galeria container"> <?php
        $random = array_rand($galeria, 4);
        foreach ($random as $id) {
            echo get_item_html($id, $galeria[$id]);
        };
        ?>
    </div>

</div>



<?php include ('inc/footer.php'); ?>