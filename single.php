<?php get_header(); ?>

    <?php if(is_single()): ?>

        <div class="container-fluid post-container">
            <div class="row">
                <div class="post-header py-4">
                    <!-- Title -->
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="col-12 col-lg-9 col-xl-10">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail( $size = 'full', ['class' => 'img-fluid my-3', 'alt' => get_the_title()] );
                                }
                            ?>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p>By <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author() ?></a> | On <?php the_date() ?></p>
                            </div>
                            <div <?php post_class() ?>>
                                <?php the_content() ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <?php endif; ?>

<?php get_footer(); ?>
