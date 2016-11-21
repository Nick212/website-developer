<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta name="generator" content="WordPress" <?php bloginfo('version'); ?> />
    <meta http-equiv="content-type contant="<?php bloginfo('html_type'); ?> ; <?php bloginfo('charset'); ?> />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="theme-color" content="#00796b">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,500,300,300italic,500italic|Roboto+Condensed:400,300" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main.css">
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/modernizr.js"></script>


<?php  wp_head();?>
</head>
<body data-spy="scroll" data-target=".header" data-offset="80">
