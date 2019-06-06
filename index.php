<?php get_header();?>

    <section class="row">
        <div class="col-md-8 text-center">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>

            <?php endwhile; else : ?>

                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <?php endif; ?>

        </div>
    </section>

<?php get_footer();?>
