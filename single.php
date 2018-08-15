<?php get_header(); ?>

    <div class="more-post-container">
        <?php
            $postid = get_the_ID();
            $more_post_location = home_url('/wp-json/wp/v2/posts?exclude='.$postid.'&per_page=3');
            $more_post_json_file = file_get_contents($more_post_location);

            $more_posts_array = json_decode($more_post_json_file, true);

            $a = 0;
            while ($a < sizeof($more_posts_array)) :
                //Variables
                $more_post_var = $more_posts_array[$a]['id'];
                $more_post_title = $more_posts_array[$a]['title']['rendered'];
                get_comments_number( $more_posts_array[$a]['id'] );?>

                    

                <?php $a++;
            endwhile;

        ?>
    </div>


<?php get_footer() ?>
