<div class="trainings__row">
    <div class="trainings__container text-center container mt-5 pt-2">
        <div class="trainings row">
            <div class="trainings__shapes text-center m-0 m-auto pt-5 mt-md-2 d-flex">
                <div class="trainings__shape"></div>
                <div class="trainings__shape"></div>
            </div>
            <h2 class="trainings__h2  mb-4 pb-4"><?php the_field('szkolenia_h2',6  ) ?></h2>
            <?php
      $args = array (
      'paged' => $paged,
      'post_status' => 'publish',
      'posts_per_page' => 6,
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
	  $button_url = get_field('button_url');

				
      ?>
            <div class="trainings__wrapper col-md-6 col-lg-4 mb-5">
                <?php if (get_field('pokazac_ikone')) {?>
                <div class="trainings__box-plug b-radius pb-3">
                    <div class="trainings__data--rabatcirlce rabat-<?php echo $i;?>">
                        <p class="trainings__data--rabatcirlcetxt"><?php echo $rabat; ?></p>
                    </div>
<!--                     <div class="trainings__data--terminrectangle termin-<?php echo $i;?> ">
                        <p class="trainings__data--terminrectangletxt training-countdown"></p>
                    </div> -->
                    <div class="trainings__box--text  mx-1 py-4">

                        <img class="m-0 mt-5 m-auto marcuslogo" src="<?php echo $ikona; ?>">
                        <div class="trainings__data--nazwa_up mx-2 px-1 mt-5 mt-md-4 mb-2 mb-md-0   ">
                            <?php echo $nazwa_up; ?>
                        </div>
                        <div class="trainings__data--nazwa_szkolenia mx-5 px-1 mb-3  "><?php echo $nazwa_szkolenia; ?>
                        </div>
                        <div class="trainings__data--infosoon  my-3 py-4 ">Więcej informacji już wkrótce!</div>
                        <div class="trainings__data--button-<?php echo $i;?> " style="pointer-evens:none"><a href="#kontakt">
                                <button class="btn trainings__btn ms-lg-1  mt-3 py-2 px-4"
                                    type="submit"><?php echo $text_button; ?>
                                </button>
                            </a>

                        </div>
                        <?php
            } else{ ?>
                        <div class="trainings__box b-radius  pt-md-5 pt-4">
                            <div class="trainings__data--rabatcirlce rabat-<?php echo $i;?>">
                                <p class="trainings__data--rabatcirlcetxt"><?php echo $rabat; ?></p>
                            </div>
                            <div class="trainings__data--terminrectangle termin-<?php echo $i;?> ">
<!--                                 <p class="trainings__data--terminrectangletxt training-countdown"></p> -->
                            </div>
                            <div class="trainings__box--text  mx-1 my-4">

                                <div class="trainings__data box-<?php echo $i;?>">
                                    <div class="trainings__data--nazwa_up  mx-2 px-1 mt-5 mt-md-4 mb-2 mb-md-0  ">
                                        <?php echo $nazwa_up; ?></div>
                                    <div class="trainings__data--nazwa_szkolenia mx-5 px-1 mb-3">
                                        <?php echo $nazwa_szkolenia; ?>
                                    </div>
                                    <div class="trainings__data--poziom my-1 "><img class="me-1"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/tryb.svg"
                                            style="" class=""> Tryb: <span class="semibold"><?php echo $tryb; ?></span>
                                    </div>
                                    <div class="trainings__data--poziom my-1"><img class="me-1"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/poziom.svg"
                                            style="" class="">Poziom: <span
                                            class="semibold"><?php echo $poziomshort; ?></span></div>
                                    <div class="trainings__data--poziom  my-1"><img class="me-1"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/data.svg"
                                            style="" class="">Data: <span
                                            class="semibold startdate"><?php echo $termin_startu; ?></span></div>
                                    <!--         <div class="trainings__data--excenna "><?php echo $excenna; ?></div>
              -->
                                    <div class="trainings__data--cenna cenahack-<?php echo $i;?> my-3 ">
                                        <?php
        $excenna = get_field('show_excenna');
        if( $excenna && in_array('Tak', $excenna) ) {
        ?>

                                        <span
                                            class="trainings__data--excenna excenna-<?php echo $i;?>"><?php the_field('excenna'); ?>
                                            
                                            <?php
        }
        ?>
                                            <br></span><?php echo $cenna; ?>
                                    </div>

                                                           <?php
                $infocheck = get_field('additionalinfo_check');
                if( $infocheck && in_array('Tak', $infocheck) ) {
                ?>
                                    <div class="trainings__data--additionalinfo my-1 powiadom-<?php echo $i;?>"><img
                                            class="me-1 trainings__data--powiadom powiadom-<?php echo $i;?> "
                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/powiadomienie.png"
                                            style="" class=""><?php echo $additionalinfo; ?>
                                    </div>
                <?php
                }
                ?>
                                </div>
                                <div class="trainings__data--button "><a class="traininglink-<?php echo $i;?>"href="<?php echo $button_url; ?>"><button
                                            class="btn trainings__btn ms-lg-1  mt-3 py-2 px-4 "
                                            type="submit"><?php echo $text_button; ?></button> </a></div>
                                <?php   }
                ?>

                            </div>
                        </div>
                    </div>
                    <?php    $i++;
          endwhile;
          endif ; ?>
                    <?php wp_reset_postdata();
          ?>
                    <div class="trainings__button trainings__button my-md-4 pb-5 pb-md-0">
                        <a href="/#szkolenia-wszystkie"><button
                                class="btn btn__szkolenia btn__more ms-lg-1 mt-md-0 mt-3 py-2 px-4" type="submit">Zobacz
                                wszystkie szkolenia</button> </a>
                    </div>
                </div>
                <div class="trainings trainings__more row hidden" id="szkolenia-all">
                    <?php
          $args = array (
          'paged' => $paged,
          'post_status' => 'publish',
          'offset' => 6,
          'order' => 'DESC',
          'post_type' => 'szkolenia'
          );
          $query = new WP_Query($args);
          if ( $query->have_posts() ) : $i=6;
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
		  $button_url = get_field('button_url');
          $id = get_the_ID();
          ?>
                    <div class="trainings__wrapper col-md-6 col-lg-4 mb-5">
                        <?php if (get_field('pokazac_ikone')) {?>
                        <div class="trainings__box-plug pb-3">
                            <div class="trainings__data--rabatcirlce rabat-0">
                                <p class="trainings__data--rabatcirlcetxt"><?php echo $rabat; ?></p>
                            </div>
<!--                             <div class="trainings__data--terminrectangle termin-1 ">
                                <p class="trainings__data--terminrectangletxt training-countdown"></p>
                            </div> -->
                            <div class="trainings__box--text d-flex justify-content-center align-center mx-1 my-4">

                                <img class="m-0 mt-5 m-auto marcuslogo" src="<?php echo $ikona; ?>">
                                <div class="trainings__data--nazwa_up mx-2 px-1 mt-5 mt-md-4  mb-2 mb-md-0  ">
                                    <?php echo $nazwa_up; ?>
                                </div>
                                <div class="trainings__data--nazwa_szkolenia mx-5 px-1 mb-3  ">
                                    <?php echo $nazwa_szkolenia; ?>
                                </div>
                                <div class="trainings__data--infosoon  my-3 py-4 ">Więcej informacji już wkrótce!</div>
                                <div class="trainings__data--button "><a class="traininglink-<?php echo $i;?>" href="<?php echo $button_url; ?>">
                                        <button class="btn trainings__btn ms-lg-1  mt-3 py-2 px-4 "
                                            type="submit"><?php echo $text_button; ?>
                                        </button>
                                    </a>

                                </div>

                                <?php
                } else{ ?>
                                <div class="trainings__box pt-md-5 pt-4">
                                    <div class="trainings__data--rabatcirlce rabat-0">
                                        <p class="trainings__data--rabatcirlcetxt"><?php echo $rabat; ?></p>
                                    </div>
<!--                                     <div class="trainings__data--terminrectangle termin-1 ">
                                        <p class="trainings__data--terminrectangletxt training-countdown"></p>
                                    </div> -->
                                    <div
                                        class="trainings__box--text d-flex justify-content-center align-center mx-1 my-4">

                                        <div class="trainings__data box-<?php echo $i;?>">
                                            <div
                                                class="trainings__data--nazwa_up mb-2 mb-md-0  mx-2 px-1 mt-5 mt-md-4  ">
                                                <?php echo $nazwa_up; ?></div>
                                            <div class="trainings__data--nazwa_szkolenia mx-5 px-1 mb-3  ">
                                                <?php echo $nazwa_szkolenia; ?></div>
                                            <div class="trainings__data--poziom my-1 "><img class="me-1"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/tryb.svg"
                                                    style="" class="">
                                                Tryb: <span class="semibold"><?php echo $tryb; ?></span></div>
                                            <div class="trainings__data--poziom my-1"><img class="me-1"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/poziom.svg"
                                                    style="" class="">Poziom: <span
                                                    class="semibold"><?php echo $poziomshort; ?></span></div>
                                            <div class="trainings__data--poziom  my-1"><img class="me-1"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/data.svg"
                                                    style="" class="">Data: <span
                                                    class="semibold startdate"><?php echo $termin_startu; ?></span></div>
                                            <!--         <div class="trainings__data--excenna "><?php echo $excenna; ?></div>
                  -->
                                            <div class="trainings__data--cenna cenahack-<?php echo $i;?> my-3  ">
                                                <span
                                                    class="trainings__data--excenna excenna-<?php echo $i;?>"><?php echo $excenna; ?>
                                                     
                                                    <br></span><?php echo $cenna; ?>
<!-- 												<span class="trainings__data--pln">
                                                    PLN<span class="light"> netto </span></span> -->
                                            </div>

                                        </div>
										     <div class="trainings__data--additionalinfo my-1 powiadom-<?php echo $i;?>"><img class="me-1 trainings__data--powiadom powiadom-<?php echo $i;?> " src="<?php echo get_template_directory_uri(); ?>/assets/img/powiadomienie.png"  style="" class=""><?php echo $additionalinfo; ?></div>
                                        <div class="trainings__data--button "><a class="traininglink-<?php echo $i;?>"
                                                href="<?php echo $button_url; ?>"><button
                                                    class="btn trainings__btn ms-lg-1  mt-3 py-2 px-4"
                                                    type="submit"><?php echo $text_button; ?></button> </a></div>
                                        <?php   }
                    ?>

                                    </div>
                                </div>
                            </div>
                            <?php  $i++;
              endwhile;
              endif ; ?>
                            <?php wp_reset_postdata();
              ?>
                        </div>
                    </div>
                </div>
                <style>
                .hidden {
                    display: none;
                }
/* 					a.traininglink-3,a.traininglink-4,a.traininglink-5,a.traininglink-6,a.traininglink-7,a.traininglink-8,a.traininglink-9,a.traininglink-10,a.traininglink-11,a.traininglink-12{
						pointer-events:none!important;
					} */

                    .powiadom-1,.powiadom-2,.powiadom-3,.powiadom-4,.powiadom-5{
        opacity:0;  }
                .trainings__data--additionalinfo {
                    opacity: 1;
                }
					.trainings__data--rabatcirlce {
                    opacity: 0;
                }

                .powiadom-0 {
                    opacity: 1 !important;
                }
					.trainings__data--cenna{
						    background-size: 50%!important;
						    background-position-y: 1.4vw;

/* 						    background-position-y: 2.4vw; */
					}
					.cenahack-3,.cenahack-4,.cenahack-5,.cenahack-6,.cenahack-7,.cenahack-8,.cenahack-9,.cennahack-10{
						    padding-bottom: 3rem!important;

					}
					.trainings__data--excenna {
						opacity:0;
					}
					.trainings__data--terminrectangle {
    height: 27px;
					}
					.trainings__data--additionalinfo{
					font-size: 1.15vw;
    font-weight: 600;
					color:black!important;
					}
					.powiadom-9{
margin-top: -5rem!important;
    margin-bottom: 3rem!important;
						}
					.powiadom-8,.powiadom-9,.powiadom-10{
    margin-top: -2.3rem;
    margin-bottom: 2.3rem;
}
					@media (max-width:992px) {
						.trainings__data--cenna{
				    background-position-y: 2.4vw!important;

						}
						.trainings__data--additionalinfo{
					font-size: 17px!important;
							font-weight:700;

					}
											.powiadom-8,.powiadom-9,.powiadom-10{
font-weight:700;
												font-size:17px;
						    margin-top: -2rem!important;
												    margin-bottom: 2rem!important;

						}
						
					}

                </style>