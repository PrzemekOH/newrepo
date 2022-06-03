<?php /* Template Name: blank */ ?>
<?php  get_header() ?>
<main>
<section class="navigation top-0">
<?php
get_template_part('template-parts/navigation');
?>
</section>

	<div class="container" style="padding-top: 23vh; padding-bottom: 5vh;">
		  <h2  class="pb-5 text-center"><?php the_title(); ?></h2>

  		<?php the_content(); ?>
	</div>
   <?php get_footer() ?>
