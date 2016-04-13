<?php
get_header();
get_sidebar();

the_post();
?>

<main>

	<div class="page">


		<?php the_content(); ?>


	</div>

</main>



<?php get_footer(); ?>
