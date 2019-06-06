<?php
/*
    Template Name: Locations
 */
?>

<?php get_header();?>
<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <h3 class="my-3"><?php the_title(); ?></h3>
                    <div class="text-left"><?php the_content(); ?></div>

                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Sorry, no pages found.' ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
