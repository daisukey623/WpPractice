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
      <h1><?php wp_title(''); ?></h1>
    <?php else : ?>
      <h1>タグ</h1>
    <?php endif; ?>
  </section>
  <main>

    <section class="article-lists">
      <div class="article-lists__inner">

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
    <div class="pagenation">
      <?php $link = get_previous_posts_link('新しい記事へ &rarr;');
      echo $link; ?>
      <?php $link = get_next_posts_link('&larr; 古い記事へ');
      echo $link; ?>
    </div>
  </main>

  <footer class="footer">
    <?Php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </footer>
</body>

</html>