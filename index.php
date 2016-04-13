<?php
get_header();
get_sidebar();

the_post();
?>

<main>

	<div class="content">


		<?php the_content(); ?>


	</div>

</main>



<?php get_footer(); ?>
