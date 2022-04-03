<section class="header-top">
  <p>テスト1</p>
  <p>テスト2</p>
  <p> テスト3</p>
  <div class="header-top__inner">
    <address class="address">
      <figure class="address__inner">
        <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/location.svg" alt="所在地" class="address__img" /><span class="address__txt">1600 Amphitheatre Parkway, CA 94043</span>
      </figure>
      <figure class="address__inner">
        <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/mail.svg" alt="メールアドレス" class="address__img" /><span class="address__txt">vctung@outlook.com</span>
      </figure>
    </address>
    <figure class="sns-items">

      <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/Facebook.svg" alt="Facebook" class="sns-items__img" />
      <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/Pinterest.svg" alt="Pinterest" class="sns-items__img" />
      <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/Twitter.svg" alt="Twitter" class="sns-items__img" />
      <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/Instagram.svg" alt="Instagram" class="sns-items__img" />
    </figure>
  </div>
</section>
<section class="header-bottom">
  <div class="header-bottom__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <img src="http://mysite.local/wp-content/themes/WpPractice/img/logo.svg" alt="FOR EDUCATION" class="logo__img" />
      <h1 class="logo__h1"><?php bloginfo('name'); ?></h1>
    </a>

    <!-- メニューIDを取得する -->
    <nav class="nav">
      <ul class="nav__inner">
        <?php
        $menu_name = 'gloval_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        ?>
        <?php foreach ($menu_items as $item) : ?>
          <li class="nav__item">
            <a href="<?php echo esc_attr($item->url); ?>"><span class="nav-items__link"><?php echo esc_html($item->title); ?></span></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <a class="btn is-primary pt-1 pb-1 pr-2 pl-2 is-size-1_5">Sign up</a>
      <div class="search">
        <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/search.svg" alt="サイト内検索" />
      </div>
    </nav>
  </div>
</section>