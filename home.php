<?php get_header(); ?>
<main>
  <section class="header__title">
    <span>NEWS</span>
    <h2>お知らせ一覧</h2>
  </section>

  <?php
  $args = array( 'post_type' => 'post' );
  $the_query = new WP_Query($args);
  if( $the_query->have_posts() ):
  ?>
      <section id="news" class="fade-in">
        <ul class="news__wrapper">
          <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
          <?php
          $categories = get_the_category();
          $category_link = get_category_link( $categories[0]->term_id );
          $category_name = $categories[0]->name;
          ?>
          <li class="news__list">
            <a href="<?php the_permalink(); ?>">
            <span class="news__date"><?php echo get_the_date(); ?></span><span class="news__category"><?php echo $category_name; ?></span>
              <div class="news__title"><?php echo get_the_title(); ?></div>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      </section>
      <?php endif; ?>
</main>

  <?php get_footer(); ?>