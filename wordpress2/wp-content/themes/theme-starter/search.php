<?php get_header(); ?>

<main role="main" id="main">
    
    <h1>Résultat de la recehrche</h1>
    
    <section>
        
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
                <h3><?php the_title(); ?></h3>
            
            <?php endwhile; ?>
        
        <?php else: ?>
            
            <p>Aucun résultat pour votre recherche.</p>
        
        <?php endif; ?>
        
        <?php wp_reset_query(); ?>
    
    </section>

</main>

<?php get_footer(); ?>
