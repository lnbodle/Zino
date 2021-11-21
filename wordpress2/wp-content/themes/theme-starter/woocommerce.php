<?php get_header(); ?>

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shopcss.css">
    
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
        <div class="shop-nav">
            <a href="mon-compte"><i class="fas fa-user"></i></a>
            <a href="panier"><i class="fas fa-shopping-basket"></i></a>
        </div>
        <h1>ZINO<span> •$HOP</span></h1>
        <nav>
            <div class="link-work">
                <a href="work">ZINO<span> •WORK</span></a>
            </div>
            <div class="link-tech">
                <a href="accueil">ZINO<span> •TECH</span></a>
            </div>
        </nav>
    </header>

    <main role="main" id="main">


        <section class="filtres background">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">

                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="graphic_filter">
                                <p>Graphic <i class="fas fa-plus-circle"></i>
                                </p>

                            </div>
                            <div class="toy_filter">
                                <p>Zine <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="kit_filter">
                                <p>Kit <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="bank_filter">
                                <p>Bank <i class="fas fa-plus-circle"></i></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="craft_filter">
                                <p>Print <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="pin_filter">
                                <p>Pin <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="graphic_filter">
                                <p>Pad <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="graphic_filter">
                                <p>Graphy <i class="fas fa-plus-circle"></i></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="kit_filter">
                                <p>Badge <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="bank_filter">
                                <p>Box <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="craft_filter">
                                <p>Craft <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="pin_filter">
                                <p>Code <i class="fas fa-plus-circle"></i></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-6">
                            <div class="graphic_filter">
                                <p>Gif <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="toy_filter">
                                <p>Toy <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="kit_filter">
                                <p>AR <i class="fas fa-plus-circle"></i></p>
                            </div>
                            <div class="bank_filter">
                                <p>Laser <i class="fas fa-plus-circle"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="selecteurs">
                        <div class="search">
                            <p><i class="fas fa-search"></i> Rechercher...</p>
                        </div>
                        <div class="tri">
                            <div class="row">

                                <div class="col-md-6 col-sm-0">
                                    <p>Prix</p>
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-0">
                                    <p>Tri</p>

                                    <div class="icones">
                                        <i class="fas fa-sort-alpha-down"></i>
                                        <i class="fas fa-sort-alpha-down-alt"></i>
                                        <i class="fas fa-random"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php woocommerce_content(); ?>
    
    </main>

<?php get_footer(); ?>