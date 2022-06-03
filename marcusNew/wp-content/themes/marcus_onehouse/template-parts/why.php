<div class="why__row row mt-5 pt-2">
  <div class="why__container text-center md-container">
    <h2 class="why__h2 mb-4 pb-4 mt-5 pt-2"><?php the_field('dlaczego_warto_h2',6 ) ?></h2>
    <div class="why__icons md-container col-lg-12 m-0 m-auto d-lg-flex">
      <div class="why__icons row">
        <?php if( have_rows('ikony',6) ): ?>
        <?php while( have_rows('ikony',6) ): the_row();
        $ikonka = get_sub_field('ikonka',6);
        $tytul_ikonka = get_sub_field('tytul_ikonka',6);
        $text_ikonka = get_sub_field('text_ikonka',6);?>
        <div class="why_icons--wrapper col-md-4 col-12 pb-5">
          <img class="why__icons--image pb-2"  src="<?php echo $ikonka; ?>"  alt="">
          <!--         <h3 class="whyus__icons--title pb-4"  data-aos="fade-up" data-aos-duration="1000"><?php echo $text; ?></h3>
          --><div class="why__icons--title pb-2 "><?php echo $tytul_ikonka; ?></div>
          <div class="why__icons--subtitle"><?php echo $text_ikonka; ?></div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>