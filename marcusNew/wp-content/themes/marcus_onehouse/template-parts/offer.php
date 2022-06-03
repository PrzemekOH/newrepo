<div class="offer__row">
    <div class="offer__container text-center">
        <h2 class="offer__h2 pt-5 mb-4 pb-3"> <?php the_field('oferta_dla_firm_h2',6 ) ?></h2>
        <div class="offer__box">
            <div class=" offer__info mb-md-0 mb-4  "><?php the_field('oferta_dla_firm_text',6 ) ?></div>
        </div>
        <div class="offer__button my-4 pb-5">
            <button
                class="btn btn__szkolenia  ms-lg-1  mt-3 py-2 px-4"><?php the_field('oferta_zapytajbutton',6 ) ?></button>
        </div>
        <div class="offer__hiddenform mobilenone">
            <h3 class="offer__h3 py-4">Zapytaj o szkolenie</h3>
            <?php echo do_shortcode('[contact-form-7 id="154" title="ZAPYTAJ O SZKOLENIE"]');
			?>
        </div>
        <div class="offer__hiddenform desktopnone">
            <?php echo do_shortcode('[contact-form-7 id="391" title="ZAPYTAJ O SZKOLENIE MOBILE"]');
			?>
        </div>
    </div>
</div>