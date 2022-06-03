<div class="counter__row my-3 pt-4 pb-4">
    <div class="counter__slider container mobilenone">
        <?php if( have_rows('counter',6) ):  $i=0;?>
        <?php while( have_rows('counter',6) ): the_row();
    $counter_text = get_sub_field('counter_text',6);
    $counter_number = get_sub_field('counter_number',6);
    ?>
        <div class="counter__box text-center">
            <div class="counter__col countercol-<?php echo $i;?>">
                <div class="counter__num count count-<?php echo $i;?>"><?php echo $counter_number; ?></div>
                <div class="counter__bg m-0 m-auto text-center mb-2 ">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/m.svg" style="" class="">
                </div>
                <div class="counter__txt "><?php echo $counter_text; ?></div>
            </div>
        </div>
        <?php $i++; endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="counter__slidermobile container col-12 desktopnone">
        <div class="row">
            <?php if( have_rows('counter',6) ): $i=0; ?>
            <?php while( have_rows('counter',6) ): the_row();
    $counter_text = get_sub_field('counter_text',6);
    $counter_number = get_sub_field('counter_number',6);
    ?>
            <div class="counter__box col-6">
                <div class="counter__col">
                    <div data-count="1500" class="counter__num count count-<?php echo $i++;?>">
                        <?php echo $counter_number; ?></div>
                    <div class="counter__bg m-0 m-auto text-center mb-2 ">.</div>
                    <div class="counter__txt "><?php echo $counter_text; ?></div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>