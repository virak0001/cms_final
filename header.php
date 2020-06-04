<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="http://website.com/css/custom-style.css?ver=<?php echo rand(111,999)?>">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <br>
        <h1 class="ml-5"> <?php bloginfo('name') ?></h1>
    </header>
    <?php wp_nav_menu(); ?>
