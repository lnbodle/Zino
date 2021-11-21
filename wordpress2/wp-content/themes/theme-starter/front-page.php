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

        <div class="logo_pictos">
            <div class="logozino">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Commun/LogoZino.svg" alt="Logo Zino" title="Logo Zino" class="imglogozino">
            </div>

            <div class="pictosheader">
                <a href="#"><i class="fab fa-instagram pictoinstanoir"></i></a>
                <a href="#"><i class="far fa-envelope pictomailnoir"></i></a>
            </div>
        </div>

    </header>
    <main>

        <div class="titre">
            <h1>Les Micro-éditions d'Art</h1>
        </div>

        <div class="texte_image">

            <div class="texte_presentation">

                <p>

                    La Zino-tech des Éditions du Pas Possible est - dans une démarche Do It
                    Together - un espace de conception, de création, de médiation et de
                    promotion de l’art par l’édition.

                </p>

                <p>

                    La Zino-team d’artiste/designer/maker hybride les technologies
                    analogiques et numériques pour le
                    meilleur et pour le pire !

                </p>

                <p>

                    It magna aliquyam erat, sed diam voluptua.
                    At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet

                </p>

            </div>

            <div class="image livre">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/Desktop/Home/Livre_Zino.jpg" media="(min-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Mobile/Home/Livre_Zino.jpg" alt="Livre Zino" class="livrezino" />
                </picture>
            </div>

        </div>


        <nav class="boutons">

            <div class="zinoShop">
                <a href="shop"><button type="button" class="zinoshopbouton"> <   ZINO <span>• SHOP</span></button></a>
            </div>

            <div class="zinowork">
                <a href="work"><button type="button" class="zinoworkbouton">ZINO <span>• WORK</span>   > </button></a>
            </div>

        </nav>

    </main>

<?php get_footer(); ?>