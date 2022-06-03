<div class="singleheader mb-5">
    <div class="singleheader__wrapper mobilenone"
        style="background-image:url(<?php the_field('header_background' ) ?>);">
        <div class="singleheader__container container d-flex col-12 pb-5">
            <div class="singleheader__textbox col-md-6 col-12">
                <ul class="singleheader__breadcrumb d-md-flex">
                    <a class="breadcrumb me-2" href="<?= get_home_url() ?>/szkolenia">Szkolenia</a> >
                    <a class="breadcrumb active ms-2"><?php the_title();?></a>
                </ul>
                <br>
                <h2 class="singleheader__h2"><strong><span
                            class="violetbg"><?php the_field('nazwa_szkolenia' ) ?></strong></h2>
                <h3 class="singleheader__subtitle py-3"><?php the_field('opis') ?></>
                </h3>
                <div class="singleheader__info mobilenone">
                    <div class="singleheader__info--paragraph pb-3">
                        <img class="me-4" 4 src="<?php echo get_template_directory_uri(); ?>/assets/img/termin.png"
                            alt="" style="" class=""><span class="singleaheader__infotxt"><span
                                class="bold"><?php the_field('termin_startu' ) ?></span> |
                            <?php the_field('miejsce_startu' ) ?></span>
                    </div>
                    <div class="singleheader__info--paragraph  pb-3">
                        <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/poziom.png" alt=""
                            style="" class=""><span class="singleaheader__infotxt">Poziom: <span
                                class="bold"><?php the_field('poziom' ) ?></span></span>
                    </div>
                    <div class="singleheader__info--paragraph">
                        <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/opinie.png" alt=""
                            style="" class=""><span class="singleaheader__infotxt">Średnia ocena z poprzednich edycji:
                            <span class="bold"><?php the_field('wpisz_sobie_customowa_srednia') ?></span></span>
                    </div>
                </div>
            </div>
            <div class="container singleheader__box-container">
                <div class="singleheader__recentbox">
                    <div class="singleheader__recentdata--box">
                        <?php
        $training_countdown = get_field('single_countdown');
        if( $training_countdown && in_array('Tak', $training_countdown) ) {
        ?>

                        <!--                     <div class="singleheader__recentboxdata--termin">
                        <p class="singleheader__recentboxdata--termintxt training-countdown">
                        </p>
                    </div> -->
                        <?php
        }
        ?>
                        <div class="singleheader__recentboxdata--title mx-4 px-4 m-0 m-auto text-center mb-2 mt-3">Co
                            zyskasz biorąc udział w szkoleniu <br><span
                                class="bold"><?php the_field('nazwa_up' ) ?>?</span>
                        </div>
                        <div class="singleheader__recentboxdata--checksbox mx-3 my-3">
                            <?php if( have_rows('punkty') ): ?>
                            <?php while( have_rows('punkty') ): the_row();
							$punkt = get_sub_field('punkt');?>
                            <div class="singleheader__recentboxdata--checks px-3 m-0 m-auto text-left"><img
                                    class="me-3 mb-2"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt=""
                                    style="" class=""><?php echo $punkt; ?></div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="trainings__data--cenna my-3 py-2 text-center ">
                            <?php
        $excenna = get_field('show_excenna');
        if( $excenna && in_array('Tak', $excenna) ) {
        ?>


                            <span
                                class="trainings__data--excenna excenna-<?php echo $i;?>"><?php the_field('excenna'); ?>
                                PLN netto
                                <?php
        }
        ?>
                                <br></span><?php the_field('cenna'); ?>
                            <!-- 						<span class="trainings__data--pln"> PLN<span
                                class="light">
                                netto </span></span> -->
                        </div>

                        <div class="singleheader__recentboxdata--additionalinfo2 px-4 m-0 m-auto text-center"><span
                                class=""><?php the_field('additionalinfo2' ) ?> </span></div>
                        <?php
        $infocheck = get_field('additionalinfo_check');
        if( $infocheck && in_array('Tak', $infocheck) ) {
        ?>
                        <div class="singleheader__recentboxdata--additionalinfo px-4 m-0 m-auto text-center"><img
                                class="me-1  "
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/powiadomienie.png" style=""
                                class=""><span class=""><?php the_field('additionalinfo' ) ?> </span></div>
                        <?php
        }
        ?>

                        <div class="singleheader__recentboxdata--button text-center px-4 m-0 m-auto mb-5 "><a
                                target="_blank" href="<?php the_field('szkolenielink' ) ?>"><button
                                    class="btn  ms-lg-1  mt-4 py-2 px-5" type="submit">Weź udział</button> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="singleheader__wrapper mt-3 desktopnone"
        style="background-image:url(<?php the_field('header_background_mobile' ) ?>)">
        <div class="singleheader__container container d-flex col-12 pb-5">
            <div class="singleheader__textbox col-md-6 col-12">
                <ul class="singleheader__breadcrumb d-md-flex">
                    <a class="breadcrumb me-2" href="<?= get_home_url() ?>/szkolenia">Szkolenia</a> >
                    <a class="breadcrumb active ms-2"><?php the_title();?></a>
                </ul>
                <br>
                <h2 class="singleheader__h2"><strong><span
                            class="violetbg"><?php the_field('nazwa_szkolenia' ) ?></span></strong></h2>
                <h3 class="singleheader__subtitle py-3"><?php the_field('opis') ?></>
                </h3>
                <div class="singleheader__info mobilenone">
                    <div class="singleheader__info--paragraph pb-3">
                        <img class="me-4" 4 src="<?php echo get_template_directory_uri(); ?>/assets/img/termin.png"
                            alt="" style="" class=""><span class="singleaheader__infotxt"><span
                                class="bold"><?php the_field('termin_startu' ) ?></span> |
                            <?php the_field('miejsce_startu' ) ?></span>
                    </div>
                    <div class="singleheader__info--paragraph  pb-3">
                        <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/poziom.png" alt=""
                            style="" class=""><span class="singleaheader__infotxt">Poziom: <span class="bold">
                                <?php the_field('poziom' ) ?></span></span>
                    </div>
                    <div class="singleheader__info--paragraph">
                        <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/opinie.png" alt=""
                            style="" class=""><span class="singleaheader__infotxt">Średnia ocena z poprzednich edycji:
                            <span class="bold"><?php the_field('wpisz_sobie_customowa_srednia') ?></span></span>
                    </div>

                </div>
            </div>
            <div class="singleheader__recentbox col-6">
                <div class="singleheader__recentdata--box ms-4 mt-4">
                    <!--                     <div class="singleheader__recentboxdata--termin  py-1">
                        <p class="singleheader__recentboxdata--termintxt"></p>
                    </div> -->
                    <div class="singleheader__recentboxdata--title px-4 m-0 m-auto text-center mb-2 mt-3">Co zyskasz
                        biorąc udział w szkoleniu MARCUS Digital Production?</div>
                    <div class="singleheader__recentboxdata--checksbox my-3">
                        <?php if( have_rows('punkty') ): ?>
                        <?php while( have_rows('punkty') ): the_row();
							$punkt = get_sub_field('punkt');?>
                        <div class="singleheader__recentboxdata--checks px-4 m-0 m-auto text-center"><img
                                class="me-3 mb-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg"
                                alt="" style="" class=""><?php echo $punkt; ?></div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="singleheader__recentboxdata--cenna px-4 m-0 m-auto text-center py-3 mb-3"><span
                            class="bold"><?php the_field('cenna' ) ?></span><span
                            class="singleheader__netto">PLN/netto</span> </div>
                    <div class="singleheader__recentboxdata--additionalinfo px-4 m-0 m-auto text-center"><span
                            class=""><?php the_field('additionalinfo' ) ?> </span></div>
                    <div class="singleheader__recentboxdata--button text-center px-4 m-0 m-auto mb-5 "><a
                            target="_blank" href="<?php the_field('szkolenielink' ) ?>"><button
                                class="btn  ms-lg-1  mt-4 py-2 px-5" type="submit">Weź udział</button> </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="singleheader__info container desktopnone">
        <div class="singleheader__info--textbox pt-3">
            <div class="singleheader__info--paragraph pb-3 py-3">
                <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/termin.png" alt=""
                    style="" class="">Termin: <span class="singleaheader__infotxt"><span
                        class="bold"><?php the_field('termin_startu' ) ?></span> |
                    <?php the_field('miejsce_startu' ) ?></span>
            </div>
            <div class="singleheader__info--paragraph pb-3">
                <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/poziom.png" alt=""
                    style="" class=""><span class="singleaheader__infotxt">Poziom: <span
                        class="bold"><?php the_field('poziom' ) ?></span></span>
            </div>
            <div class="singleheader__info--paragraph">
                <img class="me-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/opinie.png" alt=""
                    style="" class=""><span class="singleaheader__infotxt">Średnia ocena z poprzednich edycji: <span
                        class="bold"></span>4,7/5,0</span>
            </div>
            <div class="singleheader__recentboxdata--cenna px-4 m-0 m-auto text-center py-3 mb-3"><span
                    class="bold"><?php the_field('cenna' ) ?></span>
                <!-- <span class="singleheader__netto">PLN/netto</span>  -->
            </div>
            <div class="singleheader__recentboxdata--button text-center px-4 m-0 m-auto mb-5 "><a target="_blank"
                    href="<?php the_field('szkolenielink' ) ?>"><button class="btn  ms-lg-1  mt-4 py-2 px-5"
                        type="submit">Weź udział</button> </a></div>
        </div>
    </div>
</div>
</div>