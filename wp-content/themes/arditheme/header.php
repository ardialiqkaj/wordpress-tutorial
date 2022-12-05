<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WordPress First Theme Project</title>
    <?php wp_head(); ?>
</head>


<?php
if (is_home()) {
    $ardi_classes = array('ardi-class', 'my-class');
} else {
    $ardi_classes = array('no-ardi-class');
}
?>

<body <?php body_class($ardi_classes); ?>>

    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />