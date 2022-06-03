<div class="container-md tabs__row">
    <div class="tabs__container">
        <div class="tabbable">
            <!-- Only required for left/right tabs -->
            <ul class="nav nav-tabs pb-4 pt-4 ps-md-0 ps-5 pt-md-0 justify-content-between mobilenone">
                <li class="active"><a href="#tab1" class="tabs__tablink me-3" data-toggle="tab">O szkoleniu</a></li>
                <li><a href="#tab2" class="tabs__tablink me-4" data-toggle="tab">Dla kogo?</a></li>
                <li><a href="#tab3" class="tabs__tablink me-4" data-toggle="tab">Czego się dowiesz?</a></li>
                <li><a href="#tab4" class="tabs__tablink me-4" data-toggle="tab">Agenda</a></li>
                <li><a href="#tab5" class="tabs__tablink me-4" data-toggle="tab">Prowadzący</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active pt-md-5 pb-md-5 pt-3 pb-5" id="tab1">
                    <h3 class="tabs__h2 pb-3">O <span class="bold">szkoleniu</span></h3>
                    <div class="tabs__text">
                        <?php the_field('o_szkoleniu_text') ?>
                    </div>
                </div>
                <div class="tab-pane pb-5" id="tab2">
                    <h3 class="tabs__h2 pb-3">Dla <span class="bold">kogo?</span></h3>
                    <div class="tabs__text">
                        <?php the_field('dla_kogo_text') ?>
                    </div>
                </div>
                <div class="tab-pane pb-5" id="tab3">
                    <h3 class="tabs__h2 pb-3">Czego się<span class="bold"> dowiesz?</span></h3>
                    <div class="tabs__text col-12 row">
                        <?php if( have_rows('czego_sie_dowiesz_punkty') ): ?>
                        <?php while( have_rows('czego_sie_dowiesz_punkty') ): the_row();
          $punkt_czego_sie_dowiesz = get_sub_field('punkt_czego_sie_dowiesz');?>
                        <div class="tabs__czego col-md-6 col-12 pb-2">
                            <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg"
                                alt="" style="" class=""> <?php echo $punkt_czego_sie_dowiesz; ?>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="tab-pane pb-5" id="tab4">
                    <h3 class="tabs__h2 bold pb-3">Agenda</h3>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php if( have_rows('modul') ): ?>
                        <?php while( have_rows('modul') ): the_row();
          $modul_tytul = get_sub_field('modul_tytul');
          $modul_text = get_sub_field('modul_text');
          $nr = get_sub_field('nr');
          ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading<?php echo $nr; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse<?php echo $nr; ?>" aria-expanded="false"
                                    aria-controls="flush-collapse<?php echo $nr; ?>">
                                    <span class="modul"> Moduł <?php echo $nr; ?>.</span> <span
                                        class="bold modulr ps-1">
                                        <?php echo $modul_tytul; ?></span>
                                </button>
                            </h2>
                            <div id="flush-collapse<?php echo $nr; ?>" class="accordion-collapse collapse"
                                aria-labelledby="flush-heading<?php echo $nr; ?>"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><?php echo $modul_text; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="tab-pane pb-5 " id="tab5">
                    <h3 class="tabs__h2 pb-3 bold">Prowadzący</h3><?php if( have_rows('osobaprowadzaca') ): $i=0;  while( have_rows('osobaprowadzaca') ): the_row();
        $twarz = get_sub_field('twarz');
        $imie_i_nazwisko = get_sub_field('imie_i_nazwisko');
        $stanowisko = get_sub_field('stanowisko');
        $bio = get_sub_field('bio');
        ?>
                    <div class="tabs__text tabs__textbg pb-3 col-12 d-md-flex bg-<?php echo $i++;?>">
                        <div class="tabs__col--person person-<?php echo $i++;?> mt-md-4 me-md-2 col-md-4 col-12">
                            <img class="tabs__imageperson col-lg-12 " src="<?php echo $twarz; ?>" alt="">
                            <div class="tabs__data--name"><?php echo $imie_i_nazwisko; ?></div>
                            <div class="tabs__data--job "><?php echo $stanowisko; ?></div>
                            <div class="tabs__data--lessinfo desktophidden">Mniej informacji</div>
                            <div class="tabs__data--moreinfo desktophidden">Więcej informacji</div>
                        </div>
                        <div class="tabs__col--personinfo bio-<?php echo $i++;?> col-md-8 col-12">
                            <div class="tabs__data--bio me-md-5 py-3 mt-md-3"><?php echo $bio; ?></div>
                        </div>
                    </div>
                    <?php $i++; endwhile;
        endif; ?>
                </div>
                <!--  <div class="tab-pane pb-5" id="tab6">
        <h3 class="tabs__h2 pb-3 tabs__opinia bold">Opinia</h3>
        <div class="tabs__rating d-flex">    <?php echo do_shortcode('[ratingwidget type="page"]');
          ?><span class="bold mt-1"><?php the_field('wpisz_sobie_customowa_srednia') ?></span> </div>
          
        </div> -->
                <div class="tab-pane pb-5" id="tab7">
                    <h3 class="tabs__h2 pb-3">Przestrzeń <span class="bold">szkoleniowa</span></h3>
                    <div class="tabs__przestrzen col-12 mobilenone">
                        <?php if( have_rows('przestrzen_szkoleniowa') ):  $i=0;
            while( have_rows('przestrzen_szkoleniowa') ): the_row();$zdjecie = get_sub_field('zdjecie');?>
                        <div class="tabs__przestrzen--img  mb-3">
                            <div class="tabs__imageprezestrzen imagep-<?php echo $i++;?>"><img
                                    class="tabs__imageprzestrzen-img" src="<?php echo $zdjecie; ?>" alt=""></div>
                        </div>
                        <?php $i++; endwhile;
          endif; ?>
                    </div>

                    <div class="tabs__przestrzen col-12 desktopnone">
                        <?php if( have_rows('przestrzen_szkoleniowa_mobile') ):  $i=0;
            while( have_rows('przestrzen_szkoleniowa_mobile') ): the_row();$zdjecie = get_sub_field('zdjecie_mobile');?>
                        <div class="tabs__przestrzen--img  mb-3">
                            <div class="tabs__imageprezestrzen imagep-<?php echo $i++;?>"><img
                                    class="tabs__imageprzestrzen-img" src="<?php echo $zdjecie; ?>" alt=""></div>
                        </div>
                        <?php $i++; endwhile; 
          endif; ?>
                        <?php wp_reset_postdata();
          ?>
                    </div>


                </div>
            </div>
        </div>
        <h3 class="tabs__h2 pb-5">Zobacz <span class="bold">także:</span></h3>
        <div class="col-12 d-md-inline-flex row tabsrecent__row ">
            <?php
      $args = array (
      'paged' => $paged,
      'post_status' => 'publish',
      'posts_per_page' => 2,
      'order' => 'DESC',
      'post_type' => 'szkolenia'
      );
      $query = new WP_Query($args);
      if ( $query->have_posts() ) : $i=0;
      while ( $query->have_posts() ) : $query->the_post();
      $id = get_the_ID();
      $termin_startu = get_field('termin_startu');
      $pokazac_odliczanie = get_field('pokazac_odliczanie');
      $pokazac_rabat = get_field('pokazac_rabat');
      $pokazac_ikone = get_field('pokazac_ikone');
      $ikona = get_field('ikona');
      $excenna = get_field('excenna');
      $rabat = get_field('rabat');
      $nazwa_up = get_field('nazwa_up');
      $nazwa_szkolenia = get_field('nazwa_szkolenia');
      $poziom = get_field('poziom');
      $poziomshort = get_field('poziomshort');
      $tryb = get_field('tryb');
      $cenna = get_field('cenna');
      $excenna = get_field('excenna');
      $text_button = get_field('text_button');
      $additionalinfo = get_field('additionalinfo');
      $spancolor = get_field('spancolor');
      $id = get_the_ID();
      ?>
            <div class="trainings__wrapperrecent col-md-6 mb-3  ">
                <div class="trainings__box py-5 inheritheight b-radius me-md-0 me-4">
                    <?php if (get_field('pokazac_rabat')) {?>
                    <div class="trainings__data--rabatcirlce">
                        <p class="trainings__data--rabatcirlcetxt"><?php echo $rabat; ?></p>
                    </div><?php
          } else{
          }
          ?>
                    <!--     <?php if (get_field('pokazac_odliczanie')) {?>
          <div class="trainings__data--terminrectangle"><p class="trainings__data--terminrectangletxt">Start za x dni</p></div><?php
          } else{
          }
          ?> -->
                    <div class="trainings__box--text mx-1 my-4">
                        <div class="trainings__data--nazwa_up mx-5 px-1 mt-4  "><?php echo $nazwa_up; ?></div>
                        <div class="trainings__data--nazwa_szkolenia mx-5 px-1 mb-2  "><?php echo $nazwa_szkolenia; ?>
                        </div>
                        <div class="trainings__data--termin ">Data: <span
                                class="bold"><?php echo $termin_startu; ?></span></div>
                        <!--       <div class="trainings__data--poziom my-1">Poziom: <?php echo $poziom; ?></div>
            <div class="trainings__data--poziom my-1 ">Tryb: <?php echo $tryb; ?></div> -->
                        <!--       <div class="trainings__data--cenna znakbg my-3 py-2 ">
              
              <span class="trainings__data--excenna"><?php echo $excenna; ?> <span class="trainings__data--pln">PLN netto</span>
              <br></span>  <? ?><?php echo $cenna; ?><span class="trainings__data--pln"> PLN netto</span></div> -->
                        <!--       <div class="trainings__data--additionalinfo my-1 "><span class=""><?php echo $additionalinfo; ?></span></div>
              -->
                        <div class="trainings__data--button "><a href="<?php the_permalink(); ?>"><button
                                    class="btn  ms-lg-1  mt-3 py-2 px-4"
                                    type="submit"><?php echo $text_button; ?></button> </a></div>
                    </div>
                </div>
            </div>
            <?php    $i++;
          endwhile;
          endif ; ?>
            <?php wp_reset_postdata();
          ?>
        </div>
        <div class="question__box col-12 my-3 text-center m-0 m-auto">
            <div class="question__textbox pt-5 pb-3">
                <span class="question__first">Masz pytania</span><br><span class="question__second">odnośnie
                    szkolenia?</span>
                <div class="offer__button my-4 pb-5">
                    <button class="btn btn__szkolenia  ms-lg-1  mt-3 py-2 px-4">Kontakt</button>
                </div>
                <div class="offer__hiddenform desktopnone">
                    <?php echo do_shortcode('[contact-form-7 id="391" title="ZAPYTAJ O SZKOLENIE MOBILE"]');
			?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.trainings__data--rabatcirlce {
    display: none;
}

.tabsrecent__row {
    min-width: 104%;
}

.tabs__przestrzen {
    display: grid;
    grid-template-columns: 50% 30%;
}

img.tabs__imageprzestrzen-img {
    max-width: 24rem;
}

.imagep-6 {
    margin-top: -17.5em;
}

.singleheader__recentdata--box {
    top: 7.5em;
}

.singleheader__recentbox {
    margin-top: 1em;

}

.tab-pane {
    padding-top: 2rem;
    margin-top: -2rem;
}
}

.trainings__data--button {
    position: relative;
    z-index: 9998;
}

@media (max-width:992px) {
    .tabsrecent__row {
        min-width: inherit !important;
    }

    .trainings__data--button {
        position: relative;
        z-index: 1;
    }

    span.modul {
        width: 70%;

    }

    span.modulr {

        width: 145%;
    }

}
</style>