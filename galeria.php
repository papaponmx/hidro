<?php
$pageTitle = 'Galería' ;
$section= 'galeria';
include ('inc/header.php');
include ('inc/data.php');
include ('inc/functions.php');
?>

<div class="wrapper">

 <h1> <?php echo $pageTitle; ?></h1>

    <ul> <?php
        $random = array_rand($galeria, 4);
        foreach ($random as $id) {
            echo get_item_html($id, $galeria[$id]);
        };
        ?>
    </ul>

</div>



<?php include ('inc/footer.php'); ?>