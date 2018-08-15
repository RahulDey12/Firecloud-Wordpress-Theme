<footer class="fc_theme_footer container-fluid">
	<div class="fc_footer_copyright row">
		<p>&copy;
			<?php
				if(get_theme_mod("fc_copyright") != "") {
					echo get_theme_mod("fc_copyright")." :";
				}
			?></p>
		<p>wordpress theme Designed and developed by <span><a href="https://www.facebook.com/IamRahulDey">Rahul Dey</a></span></p>
	</div>
</footer>
		<?php wp_footer(); ?>
	</div>
</body>
</html>
