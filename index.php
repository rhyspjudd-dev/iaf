<?php
/*
 * Template Name: Landing Page
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

    <section id="hero">
    <?php include ("component/nav.php"); ?>

        <div class="title">

        <div class="logo">

        <?php if( get_field('logo') ): ?>
        <img src="<?php the_field('logo'); ?>" />
        <?php endif; ?>

        </div>

        <div class="motto"><?php the_field('motto'); ?></div> 

        <div class="scroll"><div class="img"></div></div> 

        </div> 
    
    </section>

    <section id="about">

            <div class="content">

            <div class="img-container"><div class="img"></div></div>

            <div class="title-box"><h1><?php the_field('sect_2_title'); ?></h1></div>

            <p><?php the_field('sect_2_content'); ?></p>

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

        </div>

    </section>

<?php get_footer(); ?>
