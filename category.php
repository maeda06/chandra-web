<?php get_header(); ?>
<main>
<?php
$categories = get_the_terms($post->ID, "column-cat");
$category_link = get_category_link( $categories[0]->term_id );
$category_name = $categories[0]->name;
$category_slug = $categories[0]->slug;
?>
<section class="header__title">
  <?php var_dump(get_categories()) ?>
  <span><?php echo $category_slug ?></span>
  <h2><?php echo $category_name ?></h2>
</section>

<?php
  if( have_posts() ):
?>
    <section id="news" class="fade-in">
      <ul class="news__wrapper">
      <?php while ( have_posts() ): the_post();
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