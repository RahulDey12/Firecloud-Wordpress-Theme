<?php
    function fc_custom_css() { ?>

        <style type="text/css">
            a {
                color: <?php echo get_theme_mod('fc_links_color', '#007BFF'); ?>;
            }
        </style>
        <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php }
