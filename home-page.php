<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
<section class="container-fluid aboutbg text-center">
            <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

                    <div class="blocker"></div>
            </div> <!-- container -->
        </section>

        <section class="container-fluid articlesbg">
            <div class="container">
                <div>
                    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
                </div>
                <div class="row">
                <div class="col-md-4">
                <img class="img-fluid" alt=“portrait” src="<?php the_field('articleimage');?>" alt="portrait">
                <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                <p class="date" ><?php the_field('articledate'); ?></p>
                <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                <img class="img-fluid" alt=“spacesuit” src="<?php the_field('articleimagemiddle');?>" alt="space suit">
                <h4 class="article-title"><?php the_field('articletitlemiddle'); ?></h4>
                <p class="date" ><?php the_field('articledatemiddle'); ?></p>
                <p class="article-p"><?php the_field('articleexcerptmiddle'); ?> </p>
                <a href="<?php the_field('readmoremiddle'); ?>" class="readmore">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                <img class="img-fluid" alt=“map” src="<?php the_field('articleimageright');?>" alt="map thing">
                <h4 class="article-title"><?php the_field('articletitleright'); ?></h4>
                <p class="date" ><?php the_field('articledateright'); ?></p>
                <p class="article-p"><?php the_field('articleexcerptright'); ?> </p>
                <a href="<?php the_field('readmoreright'); ?>" class="readmore">CONTINUE READING</a>
                </div>
            </div> <!-- row --> 
            </div> <!-- container -->       
        </section> <!-- container-fluid -->
        <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->