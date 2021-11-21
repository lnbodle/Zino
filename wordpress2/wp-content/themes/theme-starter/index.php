<?php get_header(); ?>

<header>
    
         <div class="background-lines">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="ligne-delete"></div>
            <div class="ligne-delete"></div>
            <div class="ligne-delete"></div>
        </div>
        <h1>ZINO <span class="h1_work">•WORK</span></h1>

        <nav>
            <div class="link-tech-work">
                <a href="accueil">ZINO<span> •TECH</span></a>
            </div>
            <div class="link-shop">
                <a href="shop">ZINO<span> •$HOP</span></a>
            </div>
        </nav>
</header>

<main role="main" id="main">

        <section class="contenu">

        <section class="filtres background">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="row">

                            <div class="col-md-3 col-sm-3 col-6">
                                <div class="octonary">
                                    <p>Graphic <i class="fas fa-plus-circle"></i>
                                    </p>

                                </div>
                                <div class="tertiary">
                                    <p>Zine <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="quaternary">
                                    <p>Kit <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="quinary">
                                    <p>Bank <i class="fas fa-plus-circle"></i></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6">
                                <div class="senary">
                                    <p>Print <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="septenary">
                                    <p>Pin <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="octonary">
                                    <p>Pad <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="tertiary">
                                    <p>Graphy <i class="fas fa-plus-circle"></i></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6">
                                <div class="quaternary">
                                    <p>Badge <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="quinary">
                                    <p>Box <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="senary">
                                    <p>Craft <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="septenary">
                                    <p>Code <i class="fas fa-plus-circle"></i></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6">
                                <div class="octonary">
                                    <p>Gif <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="tertiary">
                                    <p>Toy <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="quaternary">
                                    <p>AR <i class="fas fa-plus-circle"></i></p>
                                </div>
                                <div class="quinary">
                                    <p>Laser <i class="fas fa-plus-circle"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="selecteurs">
                            <div class="search">
                                <p><i class="fas fa-search"></i> Rechercher...</p>
                            </div>
                            <div class="tri">
                                <div class="row">

                                    <div class="col-md-4 col-sm-0">
                                    </div>
                                    <div class="col-md-4 col-sm-0">
                                        <p>Tri</p>

                                        <div class="icones">
                                            <i class="fas fa-sort-alpha-down"></i>
                                            <i class="fas fa-sort-alpha-down-alt"></i>
                                            <i class="fas fa-random"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section>
        
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

        
        <section class="projets">

            <div class="projet quinarybox background">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-sm-12 img">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                        <div class="col-xl-8 col-sm-12">
                            <div class="TextePresentation">
                                <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                <p><a href="<?php the_permalink(); ?>"><?php the_content(); ?></p></a>
                                <div class="TagProject">
                                    <?php $terms = get_the_terms( $post->ID, 'category' ); ?>
                                    <?php if( $terms ): ?>


                                            <?php foreach( $terms as $term ): ?>

                                            <p class="<?php echo $term->slug; ?>cat"><?php echo $term->name; ?></p>

                                            <?php endforeach; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

            
            <?php endwhile; ?>


            <section class="navigation">

            <div class="centrer">
                <div class="pagination background">
                    <a href="#">&#60;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&#62;</a>
                </div>
            </div>

        </section>
        
        <?php else: ?>
            
            
            <p>Aucun article n'est pour le moment disponible sur cette page.</p>
        
        
        <?php endif; ?>
    
    
    </section>


</main>

<?php get_footer(); ?>