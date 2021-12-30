<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <?php get_template_part('includes/header'); ?>
  </header>
  <main class="price-outer">

    <div class="price-header">
      <div class="price-header__inner">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php $img = get_eyecatch(); ?>
            <img src="<?php echo $img[0]; ?>" alt="">
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="price-cards">
      <div class="price-cards__inner">

        <div class="price-card">
          <div class="price-card__inner">
            <span class="price-card__label">STARTER</span>
            <span class="price-card__price">19.00</span>
            <span class="price-card__disc">A private limited is the most popular</span>
            <ul class="price-card__items">
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
            </ul>
            <button class="btn is-primary pt-1 pb-1 pr-2 pl-2 is-size-1_5 price-btn-size">Purchase now</button>
          </div>
        </div>
        <div class="price-card">
          <div class="price-card__inner">
            <span class="price-card__label">STARTER</span>
            <span class="price-card__price">19.00</span>
            <span class="price-card__disc">A private limited is the most popular</span>
            <ul class="price-card__items">
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
            </ul>
            <button class="btn is-primary pt-1 pb-1 pr-2 pl-2 is-size-1_5 price-btn-size">Purchase now</button>
          </div>
        </div>
        <div class="price-card">
          <div class="price-card__inner">
            <span class="price-card__label">STARTER</span>
            <span class="price-card__price">19.00</span>
            <span class="price-card__disc">A private limited is the most popular</span>
            <ul class="price-card__items">
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
              <li class="price-card__item">Access to 25 courses</li>
            </ul>
            <button class="btn is-primary pt-1 pb-1 pr-2 pl-2 is-size-1_5 price-btn-size">Purchase now</button>
          </div>
        </div>



      </div>
    </div>
  </main>








  <footer class="footer">
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </footer>
</body>

</html>