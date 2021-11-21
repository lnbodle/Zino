<?php get_header(); ?>
    
    <main role="main" id="main">
        
        <!-- section -->
        <section>
            <?php if ( have_posts() ):
                while ( have_posts() ) : the_post(); ?>
                    
                    <h1><?php the_title(); ?></h1>
                    
                    <!-- article -->
                    <article>
                        
                        <?php the_content(); ?>
                    
                    </article>
                    <!-- /article -->
                
                <?php endwhile; ?>
            
            <?php else: ?>
                
                <p>Aucun contenu n'est pour le moment disponible sur cette page.</p>
            
            <?php endif; ?>
            
            <?php wp_reset_query(); ?>
        </section>
        <!-- /section -->
    
    </main>

<?php get_footer(); ?>