<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <section class="main-visual">
    <header class="header">
      <?php get_template_part('/includes/header'); ?>
    </header>
    <?php if (is_category()) : ?>
      <h1>カテゴリー</h1>
    <?php else : ?>
      <h1>タグ</h1>
    <?php endif; ?>
    <span><?php wp_title(''); ?></span>
  </section>
  <main>
    <section class="article-lists">
      <h2 class="article-lists__h2">Top Featured Courses</h2>
      <div class="article-lists__inner">
        <?php query_posts('posts_per_page=5'); ?>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="article-list">
              <a href="<?php the_permalink(); ?>">
                <div class="article-list__inner">
                  <div class="article-list__img">
                    <img src="http://mysite.local/wp-content/themes/WpPractice/img/posts/sample.svg" alt="post画像" class="article-list__post-img" />
                    <img src="http://mysite.local/wp-content/themes/WpPractice/img/categories/sample.svg" alt="category画像" class="article-list__category-img" />
                  </div>
                  <div class="article-list__content">
                    <h3 class="article-list__h3">
                      <?php the_title(); ?>
                    </h3>
                    <span class="article-list__category-name">
                      <?php
                      $category = get_the_category();
                      echo $category[0]->cat_name;
                      ?>
                    </span>
                  </div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事が見つかりませんでした</p>
      </div>
    <?php endif; ?>
    </section>

    <?php $link = get_next_posts_link('古い記事へ');
    echo $link; ?>

  </main>

  <footer class="footer">
    <?Php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </footer>
</body>

</html>