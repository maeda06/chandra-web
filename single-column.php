<?php get_header(); ?>

<main>
<section class="header__title">
  <span>COLUMN</span>
  <h2>お役立ちコラム</h2>
</section>

  <section class="single__wrap">
    <?php
    if( have_posts() ):
    ?>
    <section class="single">
    <?php while ( have_posts() ):
      the_post();
      $categories = get_the_category();
      $category_link = get_category_link( $categories[0]->term_id );
      $category_name = $categories[0]->name;
    ?>
    
      <div class="single__item">
        <h2><?php echo get_the_title(); ?></h2>
        <div class="single__meta">
          <div class="single__meta--term">
            <?php
            if ($categories = get_the_terms($post->ID, 'column-cat')) :
              foreach ( $categories as $category ) :
            ?>
            <span class="single__item--category"><?php echo esc_html($category->name); ?></span>
            <?php
            endforeach;
            endif;
            ?>
            <?php
            if ($tags = get_the_terms($post->ID, 'column-tag')) :
              foreach ( $tags as $tag ) :
            ?>
            <span class="single__item--tag"><?php echo esc_html($tag->name); ?></span>
            <?php
            endforeach;
            endif;
            ?>
          </div>
          <p class="single__item--date"><?php echo get_the_date(); ?></p>
        </div>
        <?php if (has_post_thumbnail()) : ?>
        <div class="single__thumbnail"><?php the_post_thumbnail('full'); ?></div>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
    </section>
    <?php endif; ?>

    <?php get_sidebar(); ?>

  </section>
</main>



<?php get_footer(); ?>