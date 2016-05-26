<!DOCTYPE>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body>
    <?php bloginfo('description'); ?>
    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
    <ul>
        <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
    </ul>