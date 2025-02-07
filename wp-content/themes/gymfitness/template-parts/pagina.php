<?php

    while( have_posts() ) : the_post();

        the_title('<h1 class="text-center text-primary">','</h1>');

        if(has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }

        // A continuacion esta el codigo que muestra el mapa, pero tuve tomar el mapa de Google el cual me da error. El profesor uso otro mapa pero el plugin me dice que no es compatible con mi version y creo que por esa razon no se muestra en las opciones de ACF. 
        // if(is_page('contacto')){
        //     the_field('ubicacion');
        // }
        the_content();
    endwhile;