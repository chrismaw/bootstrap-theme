<?php get_header();?>
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-lg-8 text-center">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>

                <?php endwhile; else : ?>

                    <p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>

                <?php endif; ?>

            </div>
        </div>
    </div>

</section>
<?php get_footer();?>