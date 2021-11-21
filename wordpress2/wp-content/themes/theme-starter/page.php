<?php get_header(); ?>
    
    <main role="main" id="main">
        
        <h1><?php the_title(); ?></h1>
        
        <!-- section -->
        <section>
            <?php if ( have_posts() ):
                while ( have_posts() ) : the_post(); ?>
                    
                    <!-- article -->
                    <article>
                        
                        <?php the_content(); ?>
                    
                    </article>
                    <!-- /article -->
                
                <?php endwhile; ?>
            
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </section>
        <!-- /section -->
        
        <?php get_sidebar(); ?>
    
    </main>

<?php get_footer(); ?>