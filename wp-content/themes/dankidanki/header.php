<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     wp_head();
    ?>
    <?php 
        $title = get_the_title();
        if($title == ''){
            $title = 'home';
        }
    ?>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://static.convertio.co/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="<?php echo get_theme_root_uri(); ?>/dankidanki/style.css" rel="stylesheet">


</head>

<body>
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><a href="<?php echo '/danki/wordpress/'?>"><img src="<?php echo get_theme_root_uri(); ?> /dankidanki/imagens/home/pngs/logo.png"></a></div>
            </header>
            <ul class="menu-desktop">
                <li><a href="/danki/wordpress/">Home</a></li>
                <li><a href="/danki/wordpress/sobre/">Sobre</a></li>
                <li><a href="/danki/wordpress/contato/">Contato</a></li>
            </ul>
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="/danki/wordpress/">Home</a></li>
                    <li><a href="/danki/wordpress/sobre/">Sobre</a></li>
                    <li><a href="/danki/wordpress/contato/">Contato</a></li>
                </ul>
            </div>