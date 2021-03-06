<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php wp_head();?>
</head>
<body>

<header class="encabezado-sitio">
    <div class="contenedor">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logotipo">
            </a>
       </div> <!-- .logo -->

       <div class="informacion-encabezado">
           <div class="redes-sociales">
               
               <?php 
               
               $args = array(
                   'theme_location'     =>  'social-menu',
                   'container'          =>  'nav',
                   'container_class'    =>  'sociales',
                   'container_id'       =>  'sociales',
                   'link_before'        =>  '<span class="sr-text">',
                   'link_after'         =>  '</span>'
               );
               
               wp_nav_menu( $args );

               ?>


           </div> <!--.redes-sociales-->
           <div class="direccion">
               <p> 8197 Bay Avenue Mountain View, CA 94043</p>
               <p> Teléfono: +1-92-456-7890</p>
           </div>
       </div>


    </div> <!--.contenedor-->
</header>

    <div class="menu-principal">
        <div class="mobile-menu">
            <a href="#" class="mobile"><i class="fas fa-bars" aria-hidden="true"> Menu</i></a>
        </div>
        <div class="contenedor navegacion">

            <?php

            /* Carga de menus en Header */
            
            $args = array(
                'theme_location'    =>  'header-menu',
                'container'         =>  'nav',
                'container_class'   =>  'menu-sitio'
            );
            
            wp_nav_menu( $args );

            ?>

        </div>
    </div>