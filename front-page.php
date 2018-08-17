<?php get_header(); ?>
    <!-- About Section -->
    <div class="container-fluid fc-about-sec my-4">
        <h2 class="text-center">About US</h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-7">
                <p>Vestibulum nec faucibus sem, ac convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sit amet nunc orci. Nunc rutrum, lacus eget iaculis vulputate, nisl tortor tempus est, nec facilisis lectus nulla et tellus. Proin rutrum lacinia metus, vel facilisis arcu placerat finibus. Vestibulum quis nisl porttitor ex pulvinar vehicula a iaculis elit. Pellentesque elementum odio magna, in lobortis sapien aliquet non. Fusce iaculis massa vitae posuere fermentum. Donec sed maximus sem. Praesent ut laoreet ligula. Aliquam iaculis facilisis ex mollis viverra.</p>
                <a href="#" class="fc-btn">
                    <svg>
                        <rect></rect>
                    </svg>
                    READ MORE</a>
            </div>
            <div class="col-12 col-sm-6 col-md-5">
                <img src="<?php echo get_template_directory_uri()."/assets/img/about-us.jpg" ?>" alt="about us img" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- Recent Blogs Section -->
    <div class="container fc-recent-post-sec my-4">
        <h2 class="text-center">Recent Blogs</h2>
        <div class="row justify-content-center">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'order'     =>  'DESC',
                    'posts_per_page'    =>  3,
                    'post_status'   =>  'publish',
                    'has_password' => false
                );

                $query = new WP_Query($args);
                //Loop
                if( $query -> have_posts() ):
                    while($query -> have_posts()): $query->the_post(); ?>

                        <div class="col-12 col-sm-6 col-md-4 mb-3">
                            <div class="px-0 py-2 fc-recent-blog-content">
                                <a href="<?php echo the_permalink() ?>">
                                    <?php if(has_post_thumbnail()):
                                            //Image of recent blogs
                                            echo the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid px-2') );
                                        endif;
                                    ?>
                                </a>
                                <!-- Title -->
                                <h3 class="fc-recent-blog-head px-2 mt-3"><a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a></h3>
                                <!-- comments -->
                                <?php if( comments_open() ): ?>
                                    <p class="fc-recent-blog-comment text-right px-2"><a href="<?php echo the_permalink().'#comment' ?>"><i class="far fa-comment"></i> <?php echo get_comments_number() ?></a></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                <?php endif;
                    wp_reset_postdata();
                ?>
        </div>
    </div>

    <!-- Counter Section -->
    <div class="container-fluid my-3 px-5 fc-counter-sec">
        <div class=" row justify-content-center">
            <div class="col-12 col-sm-4 text-center">
                <i class="fas fa-video fa-4x counter-icon"></i><br>
                <span class="counter-number">10</span>
            </div>
            <div class="col-12 col-sm-4 text-center">
                <i class="fas fa-users fa-4x counter-icon"></i><br>
                <span class="counter-number">300</span>
            </div>
            <div class="col-12 col-sm-4 text-center">
                <i class="fas fa-cogs fa-4x counter-icon"></i><br>
                <span class="counter-number">50</span>
            </div>
        </div>
    </div>

<?php get_footer() ?>
