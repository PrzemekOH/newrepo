<div class="mainslider" id="mainslider_">
	<div class="mainslider__wrapper">
		<div class="mainslider__container container d-flex col-12">
			<div class="mainslider__textbox col-md-6 col-12  mt-md-4">
				<h1 class="mainslider__h1"><?php the_field('title',6 ) ?></h1>
				<h3 class="mainslider__subtitle mobilenone py-3"><?php the_field('subtitle',6 ) ?></></h3>
				<h3 class="mainslider__subtitle desktopnone py-3">Zdobądź praktyczne umiejętności z <span class="semibold"> każdego obszaru marketingu.</span><br> Wybieraj wśród  kursów tematycznych opracowanych przez<br>ekspertów z praktycznym doświadczeniem.</></h3>
				<a href="<?php the_field('buttonlink',6) ?>"><button class="btn slider mobilenone mt-3 py-2 px-4" type="submit"><?php the_field('buttontext',6 ) ?></button> </a>
			</div>
			<?php
			$args = array (
			'posts_per_page' => 1,
			'order' => 'DESC',
			'post_type' => 'szkolenia'
			);
			$query = new WP_Query($args);
			if ( $query->have_posts() ) :
			while ( $query->have_posts() ) : $query->the_post();
			$nazwa_szkolenia = get_field('nazwa_szkolenia');
			$id = get_the_ID();
			?>
			<div class="mainslider__recentbox col-6">
				<div class="mainslider__recentbox--txt ms-4 ">
					<div class="mainslider__recentbox--bgwrap">
						<div class="mainslider__recentbox--up mb-2">Najbliższe szkolenie:</div>
						<div class="mainslider__recentbox--middle  mb-2"><?php the_field('nazwa_szkolenia' ) ?></div>
					</div>
					<div class="mainslider__recentbox--down"> <a href="<?php the_permalink(); ?>" class="mainslider__recentbox--down" title="<?php the_title_attribute(); ?>">Szczegóły<img class="ms-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/strzalka_okrag.svg" alt="arrow" style="" class="arrow"></a></div>
				</div>
			</div>
			<?php
			endwhile;
			endif ; ?>
			<?php wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<div class="desktopnone mainslider__buttonarea py-5">
	<a href="<?php the_field('buttonlink',6) ?>"><button class="btn slider desktopnone ms-lg-1 mt-3 py-2 px-5 m-0 m-auto" type="submit"><?php the_field('buttontext',6 ) ?></button></a>
	<div>