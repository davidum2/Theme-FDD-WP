<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="container"> <!-- Usa 'full-width' si prefieres que el contenido ocupe todo el ancho -->
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>