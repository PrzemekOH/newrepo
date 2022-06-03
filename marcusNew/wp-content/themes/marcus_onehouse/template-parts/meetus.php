<div class="meetus__container text-center md-container mt-5 pt-2">
  <h2 class="meetus__h2 mb-4 pb-4"> <?php the_field('poznaj_naszych_trenerow_h2',6 ) ?></h2>
  <div class="meetus__logos">
    <?php if( have_rows('trenerzy',6) ): $i=0 ?>
    <?php while( have_rows('trenerzy',6) ): the_row();
    $twarz = get_sub_field('twarz',6);
    $stanowisko = get_sub_field('stanowisko',6);
    $imie_i_nazwisko = get_sub_field('imie_i_nazwisko',6);
    $prowadzi_szkolenia = get_sub_field('prowadzi_szkolenia',6);?>
   <div class="meetus__logosbox  text-center">
   <img class="meetus__image col-lg-12 " src="<?php echo $twarz; ?>" alt="">
<div class="meetus__data--name "><?php echo $imie_i_nazwisko; ?></div>  
<div class="meetus__data--job pb-2"><?php echo $stanowisko; ?></div>  
<span class="prowadzi-<?php echo $i;?>">Prowadzi szkolenie:</span>
<div class="meetus__data--traigning pb-md-0 pb-4"><a class="violet" ><?php echo $prowadzi_szkolenia; ?></a></div>  
    </div>
          <?php    $i++;
          endwhile;
          endif ; ?>
</div>
	<style>
		.prowadzi-0,.prowadzi-4,.prowadzi-7,.prowadzi-8,.prowadzi-9,.prowadzi-10{
			display:none;
		}
		@media (max-width: 992px) {
  .meetus__image {
    opacity: 1;
    width: 120px !important;
    height: 120px !important;
        border-radius: 100px;
    border: solid 2px #6C1D45;
    margin-bottom: 1rem;
  }
		}
	</style>