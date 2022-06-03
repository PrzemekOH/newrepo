<div class="certificates__row row mt-5 pt-5">
  <div  class="certificates__container text-center container">
    <h2  class="certificates__h2 mb-4 pb-4"><?php the_field('certificates_h2',6 ) ?></h2>
    <div class="certificates__icons container col-lg-12 justify-content-center m-0 m-auto d-lg-flex ">
      <?php if( have_rows('certificates',6) ): ?>
      <?php while( have_rows('certificates',6) ): the_row();
      $logo = get_sub_field('logo',6);
      $text = get_sub_field('text',6);?>
      <div class="certificates__icons--wrapper col-md-4 col-12">
        <img class="certificates__icons--image pb-5"  data-aos="fade-up" data-aos-duration="1000"  src="<?php echo $logo; ?>"  alt="">
<p class="certificates__icons--subtitle mx-md-4 "><?php echo $text; ?></p>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>