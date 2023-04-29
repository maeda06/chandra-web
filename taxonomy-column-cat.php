<?php get_header(); ?>
<main>
<section class="header__title">
  <span>COLUMN</span>
  <h2>お役立ちコラム</h2>
</section>

<?php
    $args = array(
      'tax_query' => array(
        array(
          'taxonomy' => 'column-cat',
          'field' => 'slug',
          'terms' => 'marketing',
        ),
      ),
      'post_type' => 'column',
    );
    $the_query = new WP_Query($args);
    if( $the_query->have_posts() ):
    ?>
    <section id="column" class="fade-in">
        <?php while( $the_query->have_posts() ): $the_query->the_post(); 
        $categories = get_the_terms($post->ID, "column-cat");
        $category_link = get_category_link( $categories[0]->term_id );
        $category_name = $categories[0]->name;
        ?>
        <div class="column__item">
          <a href="<?php the_permalink(); ?>">
            <div class="column__img"><?php the_post_thumbnail("medium", array("alt" => get_the_title(), "class" => "sample")); ?></div>
            <div class="column__text">
              <span class="column__date"><?php echo get_the_date(); ?></span>
              <a href="<?php echo $category_link; ?>"><span class="coumn__category"><?php echo $category_name; ?></span></a>
              <h3><?php the_title(); ?></h3>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
    </section>
    <?php endif; ?>
</main>


<?php get_footer(); ?>