<footer>
  <section id="contact">
    <div class="section__title">
      <span>CONTACT</span>
      <h2>お問い合わせ</h2>
    </div>
    <div class="contact__text">
      <h2>お気軽にご相談ください。</h2>
      <p>（土・日・祝日もお気軽にご連絡ください。）</p>
      <div class="button">
        <a href="contact/">お問い合わせはコチラ</a>
      </div>
    </div>
  </section>
  <div class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_footer2.png" alt="株式会社chandra"></div>
  <?php
    $setting = array(
      'theme_location'  => 'footer_menu',
    );
    wp_nav_menu( $setting );
    ?>
  <p>&copy;2022 CHANDRA-inc.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/536449a500.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>