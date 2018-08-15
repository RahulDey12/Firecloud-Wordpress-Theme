	<?php get_header(); ?>
	<?php
		if(have_posts()) :
			echo "<div class='container'><div class='row'>";
			while(have_posts()) : the_post(); ?>
				<div class="my-3 col-12 col-sm-6 col-lg-<?php
					$blogs_numb = get_theme_mod("fc_blogs_numb");
					switch($blogs_numb) {
						case "two":
							echo "6";
							break;
						case "three":
							echo "4";
							break;
						case "four":
							echo "3";
							break;
						default:
							echo "4";
					}
				?>">
					<div class="card">
						<div class="card-body">
							<h3 class="card-title"><?php the_title(); ?></h3>
							<?php the_excerpt() ?>
							<a class="btn btn<?php if(get_theme_mod("fc_blog_btn_type") == "outline") {echo "-outline";} ?>-<?php echo get_theme_mod("fc_blog_btn_layout") ?>" href="<?php the_permalink() ?>">Read More</a>
						</div>
					</div>
				</div>
		<?php endwhile;
			echo "</div></div>";
		endif; ?>
	<?php get_footer(); ?>
