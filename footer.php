
    <footer>
        <?php
        
            $args = array(

                'theme_location' =>  'header_menu',
                'container' =>  'nav',
                'after' =>  '<h1>hola</h1>'
            );
            
            
           wp_nav_menu( $args );
            
        ?>
    </footer>

        <?php wp_footer(); ?>
    
    </body>
</html>