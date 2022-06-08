<?php get_header(); ?>

<main>
<section class="header__title">
  <span>NEWS</span>
  <h2>お知らせ</h2>
</section>

  <?php
  $args = array( 'post_type' => 'post' );
  $the_query = new WP_Query($args);
  if( $the_query->have_posts() ):
  ?>
  <section class="single">
  <?php while ( $the_query->have_posts() ):
    $the_query->the_post();
    $categories = get_the_category();
    $category_link = get_category_link( $categories[0]->term_id );
    $category_name = $categories[0]->name;
  ?>
    <div class="single__item">
      <span class="single__item--category"><?php echo $category_name ?></span><span class="single__item--date"><?php echo get_the_date(); ?></span>
      <h2><?php echo get_the_title(); ?></h2>
      <?php
      $content = apply_filters('the_content',get_the_content());
      echo $content;
      ?>
    </div>
    <?php endwhile; ?>
  </section>
  <?php endif; ?>
</main>

<?php get_footer(); ?>