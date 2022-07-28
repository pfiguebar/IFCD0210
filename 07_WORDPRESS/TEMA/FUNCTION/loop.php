<?php

// aqui escribimos HEADER //
get_header();

if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

		<!-- aqui escribimos el MAIN -->
		
		<!-- TITULO ARTICULO -->
		<p> ESTO ES EL TITULO: <?php the_title() ?>  </p>
        
		<!-- CONTENIDO ARTICULO -->
		<p> ESTO ES EL CONTENIDO: <?php the_content() ?>  </p>
		
		<!-- LINK PAGINA ARTICULO -->
		<p> ESTO ES LINK PAGINA: <?php the_permalink() ?>  </p>
		
		<?php endwhile;

else :
        echo '<p>No hay post</p>';

endif;

// aqui escribimos FOOTER //
get_footer();

?>
