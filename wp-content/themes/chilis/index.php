<?php get_header();?>

<div class="home-slider">
        <img src="<?php bloginfo('template_directory');?>/img/banner_1.png" class="img-slider" alt="Always Happy">
        <img src="<?php bloginfo('template_directory');?>/img/banner_1.png" class="img-slider" alt="Always Happy">
    </div>

<section class="platos-principales">
    <div class="container">
        
        <h1><?php the_title(); ?></h1>
        <di>
            <?php the_post();the_content(); ?>
        </di>
        <div class="row">

            <div class="col-md-3 menu-item">
                <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/p5.jpg" alt="">
                <h3>Plato N°1</h3>
                <a href="#">Ver más</a>
            </div>

            <div class="col-md-3 menu-item">
                <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/p17.jpg" alt="">
                <h3>Plato N°1</h3>
                <a href="#">Ver más</a>
            </div>

            <div class="col-md-3 menu-item">
                <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/p28.jpg" alt="">
                <h3>Plato N°1</h3>
                <a href="#">Ver más</a>
            </div>

            <div class="col-md-3 menu-item">
                <img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/p34.jpg" alt="">
                <h3>Plato N°1</h3>
                <a href="#">Ver más</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>


