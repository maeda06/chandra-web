<?php get_header(); ?>

<main>
<section class="header__title">
  <span>CONTACT</span>
  <h2>お問い合わせ</h2>
</section>

<?php
if( have_posts() ):
  while ( have_posts() ):
    the_post();
?>
<section id="contact-form">
  <?php the_content(); ?>
</section>
<?php
endwhile;
endif;
?>
</main>

<?php get_footer(); ?>
