<div class="footer__row pt-5 pb-5  mobilenone">
  <div class="footer__cont container col-md-12 d-flex">
    <div class="col-md-3">
      <div class="footer__logo pb-3 "> 
        <a class="footer-logo" href="<?= get_home_url() ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo" style="" class="logo"></a>
		  <a class="footer-logo" href="https://one-house.pl/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/powered2.png" alt="Logo" style="" class="powered-footer"></a>
      </div>
      <div class="footer__poweredby">
        <a class="footer-poweredby" href="https://one-house.pl"></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="footer__data ">
        <div class="footer__adres"><img class="foorter__images--pinezka me-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/pinezka.svg" alt=""> <?php the_field('adres',6 ) ?><br><a  href="https://www.google.com/maps/place/ONE+House+Sp.+z+o.o./@52.198857,21.0452205,17z/data=!3m1!4b1!4m5!3m4!1s0x471933333b032cd9:0x9c1dfde898e0815e!8m2!3d52.1988537!4d21.0474092?shorturl=1" class="footer__find" target="_blank">Znajdź nas! »</a></div>
        <div class="footer__mailandtel"><span class="footer__tel "> <img class="foorter__images--tel me-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/telefon.svg" alt=""><a class="footer__mailtel" href="tel:<?php the_field('telefon',6 ) ?>"><?php the_field('telefon',6 ) ?></a></span><br>
        <span class="footer__mail"><img class="foorter__images--mail me-3 " src="<?php echo get_template_directory_uri(); ?>/assets/img/email.svg" alt=""><a class="footer__mailtel"href="mailto:<?php the_field('mail',6 ) ?>"><?php the_field('mail',6 ) ?></a> </span>
      </div>
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="footer__navbottom d-flex ms-md-5 pb-4">
      <a class="footer__nav mx-2" href="<?= get_home_url() ?>/#szkolenia">Szkolenia</a>
      <a class="footer__nav mx-2" href="<?= get_home_url() ?>/#dla-firm">Dla firm</a>
      <a class="footer__nav mx-2" href="<?= get_home_url() ?>/#trenerzy">Trenerzy</a>
      <a class="footer__nav mx-2" href="<?= get_home_url() ?>/#dlaczego-warto">Dlaczego warto</a>
    </div>
    <br>
    <div class="footer__socials mt-md-4 d-md-flex ms-md-5">
      <a class="footer__soc ms-md-5 me-md-2 ps-md-5" href="https://www.facebook.com/MARCUSAcademy360" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="insta" style="" class="footer__insta"></a>
      <a class="footer__soc mx-2" href="https://www.instagram.com/marcusacademy.pl/" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="fb" style="" class="footer__fb"></a>
      <a class="footer__soc mx-2" href="https://www.linkedin.com/showcase/marcusacademy360/" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="fb" style="" class="footer__linkedin"></a>
    </div>
  </div>
	  
	  
</div>
<div class="footer__cont container col-md-12 d-flex">
  <div class="col-md-6">
    <div class="footer__footerccopyright">
      <span class="footer__copyrighttxt"></span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="footer__socials footer__socials2 d-md-flex ms-md-5 pe-md-1">
      <a class="foote__soc mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/iab_logo.png" style="" class="footer__iab"></a>
      <a class="footer__soc mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualid_logo.png" style="" class="footer__qualid"></a>
      <a class="footer__soc mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sar_logo.png" style="" class="footer__sar"></a>
      <a class="footer__soc mx-2 footer__gp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gp.png" class="footer__gp"></a>
    </div>
  </div>
</div>
<div class="row footer__hr mb-3">
</div>
<div class="footer__cont container col-md-12 d-flex">
  <div class="col-md-6">
    <div class="footer__footerccopyright">
      <span class="footer__copyrighttxt">MARCUS Academy All rights reserved</span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="footer__privacycookies d-flex ms-md-5">
      <a class="footer__privacycookiesnav mx-2" href="<?= get_home_url() ?>/polityka-prywatnosci" >Polityka prywatności</a>
      <a class="footer__privacycookiesnav mx-2" href="<?php echo get_template_directory_uri(); ?>/regulamin-szkolen-2022.pdf" >Regulamin szkoleń</a>
    </div>
  </div>
</div>
</div>
<div class="footer__row pt-5 pb-5 desktopnone">
<div class="container">
  <div class="footer__logo pt-4 pb-3">
    <a href="<?= get_home_url() ?>/" class="footer-logo"  ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo"></a><br>
			  <a class="footer-logo" href="https://one-house.pl/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/powered2.png" alt="Logo" style="" class="powered-footer"></a>
	</div>
	
    <div class="footer__adres pb-3"> <img class="foorter__images--mail me-2 " src="<?php echo get_template_directory_uri(); ?>/assets/img/pinezka.svg" alt=""><?php the_field('adres',6 ) ?><br><a href="https://www.google.com/maps/place/ONE+House+Sp.+z+o.o./@52.198857,21.0452205,17z/data=!3m1!4b1!4m5!3m4!1s0x471933333b032cd9:0x9c1dfde898e0815e!8m2!3d52.1988537!4d21.0474092?shorturl=1" class="footer__find" target="_blank">Znajdź nas! »</a></div>
    <div class="footer__adres pb-3"> <img class="foorter__images--tel me-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/telefon.svg" ><a class="footer__mailtel" href="tel:<?php the_field('telefon',6 ) ?>"><?php the_field('telefon',6 ) ?></a></div>
    <div class="footer__adres pb-3"> <img class="foorter__images--mail me-2 " src="<?php echo get_template_directory_uri(); ?>/assets/img/email.svg" ><a class="footer__mailtel"href="mailto:<?php the_field('mail',6 ) ?>"><?php the_field('mail',6 ) ?></a> </div>
    <div class="footer__social py-4  m-0 m-auto text-center">
      <a class="footer__soc mx-3" href="https://www.facebook.com/MARCUSAcademy360" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg"  style="" class="footer__insta"></a>
      <a class="footer__soc mx-3" href="https://www.instagram.com/marcusacademy.pl/" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagram.svg"  style="" class="footer__fb"></a>
      <a class="footer__soc mx-3" href="https://www.linkedin.com/showcase/marcusacademy360/" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg"  style="" class="footer__linkedin"></a>
    </div>
    <div class="footer__navbottom m-0 m-auto text-center pt-2">
      <div class="pb-3"><a class="footer__nav" href="<?= get_home_url() ?>/#szkolenia">Szkolenia</a></div>
      <div class="pb-3"> <a class="footer__nav" href="<?= get_home_url() ?>/#dla-firm">Dla firm</a></div>
      <div class="pb-3"><a class="footer__nav" href="<?= get_home_url() ?>/#trenerzy">Trenerzy</a></div>
      <div class="pb-3"><a class="footer__nav" href="<?= get_home_url() ?>/#dlaczego-warto">Dlaczego warto</a></div>
    </div>
    <div class="footer__social py-4  m-0 m-auto text-center">
      <a class="foote__soc mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/iab_logo.png" style="" class="footer__iab"></a>
      <a class="footer__soc mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualid_logo.png" style="" class="footer__qualid"></a>
      <a class="footer__soc mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sar_logo.png"style="" class="footer__sar"></a>
      <a class="footer__soc mx-2 footer__gp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gp.png" class="footer__gp"></a>
    </div>
    <div class="footer__social py-4 m-0 m-auto text-center">
      <a class="footer__soc me-md-5" href="<?= get_home_url() ?>/polityka-prywatnosci" >Polityka prywatności</a>
      <a class="footer__soc" href="<?php echo get_template_directory_uri(); ?>/regulamin-szkolen-2022.pdf">Regulamin szkoleń</a>
    </div>
    <div class="footer__footerccopyright py-4 m-0 m-auto text-center">
      <div class="footer__right">MARCUS Academy All rights reserved</div>
    </div>
  </div>
</div>