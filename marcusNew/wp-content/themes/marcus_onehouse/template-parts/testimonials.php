<div class="testimonials__row">
    <div class="testimonials__container text-center container py-5">
        <h2 class="testimonials__h2 mb-4 pb-4"> <?php the_field('zaufalinam_h2',6 ) ?></h2>
        <div class="testimonials__logos">
            <?php if( have_rows('zaufali_slider',6) ): ?>
            <?php while( have_rows('zaufali_slider',6) ): the_row();
            $logo = get_sub_field('logo',6);
            $link = get_sub_field('link',6);
            $alt = get_sub_field('alt',6);?>
            <div class="testimonials__logosbox  text-center">
                <a href="<?php echo $link; ?>"><img class="testimonials_image col-lg-12 " src="<?php echo $logo; ?>" alt=""></a>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>