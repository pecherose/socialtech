<footer>
      <div id="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="SocialTech">
      </div>
        <div id="footer-link">
          <a href="<?php echo esc_url(home_url('/')); ?>/mission">MISSION</a>
          <a href="<?php echo esc_url(home_url('/')); ?>/product">PRODUCT</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#aboutus">ABOUTUS</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#vision">VISION</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#company">COMPANY</a>
          <a href="<?php echo esc_url(home_url('/')); ?>#contact">CONTACT</a>
        </div>
          <div id="sns-footer">
            <div class="sns-btns">
              <a href="https://www.facebook.com/sejuku2013"><img src="<?php echo get_template_directory_uri(); ?>/images/button-facebook.png" alt="Facebookのリンク"></a>
              <a href="https://twitter.com/samuraijuku"><img src="<?php echo get_template_directory_uri(); ?>/images/button-twitter.png" alt="Twitterのリンク"></a>
              <a href="https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g"><img src="<?php echo get_template_directory_uri(); ?>/images/button-youtube.png" alt="YouTubeのリンク"></a>
            </div>
            <p id="copyright">&copy;2021 SocialTech, Inc. All Rights Reserved.</p>
          </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>