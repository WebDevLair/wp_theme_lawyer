<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset=<?php bloginfo('charset'); ?>>
    <title><?php wp_title('«', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrap">

        <header class="header" id="header">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'nav navbar-nav')); ?>

                                <ul class="nav navbar-nav navbar-right navbar--contact-info">
                                    <li class="navbar--contact-info__item navbar--contact-info__item--tel-number">+2(123) 18-99-1212</li>
                                    <li class="navbar--contact-info__item navbar--contact-info__item--email"><a href="mailto:Ivan_layer@mail.ru">Ivan_layer@mail.ru</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- row -->
            </div><!-- container -->
        </header>