<?php /* Template Name: Home Page */ ?>

<?php  get_header() ?>
<main>
    <section class="navigation">
        <?php
get_template_part('template-parts/navigation');
?>
    </section>
    <section class="mainslider" id="mainslider">
        <?php
get_template_part('template-parts/mainslider');
?>
    </section>
    <section class="certificates" id="certificates">
        <?php
get_template_part('template-parts/certificates');
?>
    </section>
    <section class="szkolenia" id="szkolenia">
        <?php
get_template_part('template-parts/trainings');
?>
    </section>
    <section class="testimonials" id="testimonials">
        <?php
get_template_part('template-parts/testimonials');
?>
    </section>
    <section class="counter" id="counter">
        <?php
get_template_part('template-parts/counter');
?>
    </section>
    <section class="dla-firm" id="dla-firm">
        <?php
get_template_part('template-parts/offer');
?>
    </section>
    <section class="trenerzy" id="trenerzy">
        <?php
get_template_part('template-parts/meetus');
?>
    </section>
    <section class="dlaczego-warto" id="dlaczego-warto">
        <?php
get_template_part('template-parts/why');
?>
    </section>
    <section class="kontakt" id="kontakt">
        <?php
get_template_part('template-parts/form');
?>
    </section>
    <!-- <section class="footer" id="footer">
<?php
get_template_part('template-parts/footer');
?>
</section> -->
    <?php get_footer() ?>