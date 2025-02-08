<!DOCTYPE html>
<html>
<head>
  <title>SocialTech</title>
  <meta charset="UTF-8">
  <meta name="description" content="SocialTechはEdTech業界のリーディングカンパニーを目指します。">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main_styles.css">
  <?php wp_head(); ?>
</head>
<body>
  <!--ヘッダー-->
  <header>
      <!--ロゴ-->
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" id="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページに戻る"></a>

      <!--PC用ナビゲーション-->
      <nav id="nav-pc">
        <ul>
          <li><a href="<?php echo home_url(); ?>/mission">MISSION</a></li>
          <li><a href="<?php echo home_url(); ?>/product">PRODUCT</a></li>
          <li><a href="<?php echo home_url(); ?>#aboutus">ABOUT US</a></li>
          <li><a href="<?php echo home_url(); ?>#vision">VISION</a></li>
          <li><a href="<?php echo home_url(); ?>#company">COMPANY</a></li>
          <li><a href="<?php echo home_url(); ?>#contact">CONTACT</a></li>
        </ul>
      </nav>
        <!-- スマホ用メニューボタン -->
        <button id="menu-sp" onclick="document.getElementById('nav-sp').style.display = 'block'">
          <img src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ナビゲーションを開く">
        </button>
         <!-- スマホ用ナビゲーション -->
         <div id="nav-sp">
          <button id="close" onclick="document.getElementById('nav-sp').style.display = 'none'">
            <img src="<?php echo get_template_directory_uri(); ?>/images/button-close.png" alt="ナビゲーションを閉じる">
          </button>
  
          <nav>
            <ul>
              <li>
                <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="トップページに戻る"></a>
              </li>
              <li><a class="menu" href="mission.html" onclick="document.getElementById('nav-sp').style.display = 'none'">MISSION</a></li>
              <li><a class="menu" href="product.html" onclick="document.getElementById('nav-sp').style.display = 'none'">PRODUCT</a></li>
              <li><a class="menu" href="index.html#aboutus" onclick="document.getElementById('nav-sp').style.display = 'none'">ABOUT US</a></li>
              <li><a class="menu" href="index.html#vision" onclick="document.getElementById('nav-sp').style.display = 'none'">VISION</a></li>
              <li><a class="menu" href="index.html#company" onclick="document.getElementById('nav-sp').style.display = 'none'">COMPANY</a></li>
              <li><a class="menu" href="index.html#contact" onclick="document.getElementById('nav-sp').style.display = 'none'">CONTACT</a></li>
            </ul>
          </nav>
          <div id="sns">
            <a href="https://www.facebook.com/sejuku2013">
              <img src="<?php echo get_template_directory_uri(); ?>/images/button-facebook.png" alt="Facebookのリンク">
            </a>
            <a href="https://twitter.com/samuraijuku">
              <img src="<?php echo get_template_directory_uri(); ?>/images/button-twitter.png" alt="Twitterのリンク">
            </a>
            <a href="https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g">
              <img src="<?php echo get_template_directory_uri(); ?>/images/button-youtube.png" alt="YouTubeのリンク">
            </a>
          </div>
        </div>
  </header>