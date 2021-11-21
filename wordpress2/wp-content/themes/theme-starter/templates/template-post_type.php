<?php
/*
	Template Name: Template liste post type
*/

get_header(); ?>
    
    <main role="main" id="main">
        
        <h1><?php the_title(); ?></h1>
        
        <!-- section -->
        <section class="">
            <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
                
                <article>
                    
                    <?php the_content(); ?>
                
                </article>
                <!-- /article -->
            
            <?php endwhile; ?><?php endif; ?>
            
            <div>
                <?php
                // The Query
                $args = array(
                    'posts_per_page' => '3',
                    'post_type'      => 'post_type',
                );
                query_posts( $args );
                
                // The Loop
                if ( have_posts() ):
                    while ( have_posts() ) : the_post(); ?>
                        
                        <h3><?php the_title() ?></h3>
                    
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        
        </section>
    
    </main>

<?php get_footer(); ?>