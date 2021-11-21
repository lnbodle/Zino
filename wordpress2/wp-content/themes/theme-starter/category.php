<?php get_header(); ?>

<main role="main">
    <h1>Categories</h1>
    
    <section>
        
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
            
            <?php endwhile; ?>
        
        <?php else: ?>
            
            <p>Aucun contenu n'est pour le moment disponible sur cette page.</p>
        
        <?php endif; ?>
    
    </section>

</main>

<?php get_footer(); ?>
