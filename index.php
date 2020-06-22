<?php
/*
 * Template Name: Landing Page
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

    <section id="hero">
        
    <?php include ("component/nav.php"); ?>

    <div class="quoter animate__animated animate__slideInLeft animate__delay-2s">
    <h3>Get a quote now</h3>
    <div class="phone"><div class="img"></div><h3><?php the_field('phone_num'); ?></h3></div>
    </div>

        <div class="title">

        <div class="logo animate__animated animate__flipInX animate__delay-1s">

        <?php if( get_field('logo') ): ?>
        <img src="<?php the_field('logo'); ?>" />
        <?php endif; ?>

        </div>

        <div class="motto animate__animated animate__flipInX animate__delay-2s">Imagine it was<span>&nbsp;this easy</span><?php // the_field('motto'); ?></div> 
        <div class="sub-contact animate__animated animate__flipInX animate__delay-3s">
            <div class="phone"><div class="img"></div><h3><?php the_field('phone_num'); ?></h3></div>
            <div class="mail"><div class="img"></div><h3><?php the_field('mail_add'); ?></h3></div>
        </div>
        <div class="scroll animate__animated animate__bounce animate__delay-2s"><div class="img"></div></div> 

        <a href="#ex1" rel="modal:open" class="enquire animate__animated animate__fadeInUpBig animate__delay-3s"><div class="img"></div><span>Enquire!</span></a>

        <div id="ex1" class="modal">
        <header>Please fill out the form, we will be in touch shortly.</header>
        <div class="form">
        <?php echo do_shortcode('[wpforms id="5" title="false" description="false"]'); ?>
        </div>
        <a href="#" rel="modal:close"></a>
        </div>

        </div> 
    
    </section>

    <section id="about">

            <div class="content">

            <div class="img-container"><div class="img"></div></div>

            <div class="title-box"><h1><?php the_field('sect_2_title'); ?></h1></div>
            <div class="text">
            <h1><?php the_field('sect_2_title'); ?></h1>
            <p><?php the_field('sect_2_content'); ?></p>
            </div>
            

            </div>

    </section>

    <section id="assets">

        <div class="content">

        <div class="img-container"><div class="img"></div></div>

        <div class="title-box"><h1><?php the_field('sect_3_title'); ?></h1></div>

            <div class="flexslider">

                <?php if( have_rows('slider') ): ?>

                <ul class="slides">

                <?php while( have_rows('slider') ): the_row(); 

                    // vars
                    $img = get_sub_field('img');
                    $slideTitle = get_sub_field('slide_title');
                    $slideText = get_sub_field('slide_text');

                    ?>

                    <li class="slide">
                        <div class="slider-img"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" /></div>
                        <h3><?php echo $slideTitle; ?></h3>
                        <p><?php echo $slideText; ?></p>
                    </li>

                <?php endwhile; ?>

                </ul>

                <?php endif; ?>


                </div>

            </div>

    </section>

    <section id="fund">

        <div class="content">

        <div class="img-container"><div class="img"></div></div>

        <div class="title-box"><h1><?php the_field('sect_4_title'); ?></h1></div>

        <p><?php the_field('sect_4_content'); ?></p>

        </div>

    </section>

    <section id="products">

        <div class="content">

        <div class="img-container"><div class="img"></div></div>

        <div class="title-box"><h1><?php the_field('sect_5_title'); ?></h1></div>

        <?php if(get_field('products')): ?>

        <ul>

        <?php while(has_sub_field('products')): ?>

            <li>
                <h3><?php the_sub_field('product_title'); ?></h3>
                <p><?php the_sub_field('product_desc'); ?></p>
            </li>

        <?php endwhile; ?>

        </ul>

        <?php endif; ?>

        <div class="sub-contact">
            <div class="phone"><div class="img"></div><h3><?php the_field('phone_num'); ?></h3></div>
            <div class="mail"><div class="img"></div><h3><?php the_field('mail_add'); ?></h3></div>
        </div>

        </div>

    </section>

    <section id="tc">

        <div class="content">

        <div class="img-container"><div class="img"></div></div>

        <div class="title-box"><h1><?php the_field('sect_6_title'); ?></h1></div>

        <p><?php the_field('sect_6_content'); ?></p>

        </div>

    </section>

    <section id="connect">

        <div class="content">

        <div class="img-container"><div class="img"></div></div>

        <div class="title-box"><h1><?php the_field('sect_7_title'); ?></h1></div>

        <?php if(get_field('sect_7_content')): ?>

            <ul>

            <?php while(has_sub_field('sect_7_content')): ?>

                <li>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </li>

            <?php endwhile; ?>

            </ul>

            <?php endif; ?>

        </div>

    </section>

<?php get_footer(); ?>
