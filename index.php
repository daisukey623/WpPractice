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

    <section class="hero">
      <div class="hero__inner">
        <div class="hero__content">
          <span class="hero__sub-title">Become Master</span>
          <span class="hero__title">Learn New Skills Online<br />
            Find Best Courses
          </span>
        </div>
        <div class="hero__btn-group">
          <a class="btn is-primary mr-3 pt-1 pb-1 pr-2 pl-2 is-size-1_5">Get A Quote</a>
          <a class="btn pt-1 pb-1 pr-2 pl-2 is-size-1_5">Read more</a>
        </div>
        <div class="hero__img-outer">
          <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/MV.svg" alt="メインビジュアル" class="hero__img" />
        </div>
      </div>
    </section>
    <section class="hero-banner">
      <div class="hero-banner__inner">
        <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/campaign.svg" alt="キャンペーン情報" class="hero-banner__img" />
        <span class="hero-banner__title">Upcoming Our
          <span class="has-text-primary">Basic in <br />
            Python</span>
          Course!</span>
        <div class="hero-banner__date-outer">
          <div class="hero-banner__date">
            <span class="hero-banner__date-num">11</span>
            <span class="hero-banner__date-txt">Days</span>
          </div>
          <div class="hero-banner__date">
            <span class="hero-banner__date-num">11</span>
            <span class="hero-banner__date-txt">Days</span>
          </div>
          <div class="hero-banner__date">
            <span class="hero-banner__date-num">11</span>
            <span class="hero-banner__date-txt">Days</span>
          </div>
          <div class="hero-banner__date">
            <span class="hero-banner__date-num">11</span>
            <span class="hero-banner__date-txt">Days</span>
          </div>
        </div>
      </div>
    </section>
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

    <section class="successful-feedback">
      <div class="successful-feedback__inner">
        <div class="successful-feedback__img-outer">
          <div class="successful-feedback__img">
            <img src="http://mysite.local/wp-content/themes/WpPractice/img/student.svg" alt="Successful Student Feedback" class="successful-feedback__student-img" />
            <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/successful.svg" alt="Successful Student Feedback" class="successful-feedback__category-img" />
            <div class="successful-feedback__name-container">
              <span class="successful-feedback__name">Kimmie Vo</span>
              <span class="successful-feedback__skill">Junior Designer</span>
            </div>
          </div>
        </div>

        <div class="successful-feedback__content">
          <h2 class="successful-feedback__h2">
            Successful Student <span class="has-text-primary">Feedback</span>
          </h2>
          <p class="successful-feedback__desc">
            Take courses from the world’s best instructors and universities.
            Courses include recorded auto-graded and peer-reviewed
            assignments, video lectures, and community discussion forums. When
            you complete a course, you’ll be eligible to receive a shareable
            electronic Course Certificate for a small fee.
          </p>
          <span class="successful-feedback__info">The courses that Kimmie has taken</span>

          <article class="card">
            <div class="card__inner">
              <img src="http://mysite.local/wp-content/themes/WpPractice/img/posts/sample.svg" alt="post画像" class="card__img" />
              <div class="card__article">
                <h3 class="card__article-ttl">
                  Modern and Contemporary Art and Design
                </h3>
                <span class="card__article-category">The Museum of Modern Art</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="service-data">
      <div class="service-data__inner">
        <div class="service-data__item">
          <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/serviceInfo01.svg" alt="courseData" class="service-data__img" />
          <span class="service-data__num">768</span>
          <span class="service-data__label">COURSES PUBLISHED</span>
        </div>
        <div class="service-data__item">
          <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/serviceInfo02.svg" alt="courseData" class="service-data__img" />
          <span class="service-data__num">768</span>
          <span class="service-data__label">COURSES PUBLISHED</span>
        </div>
        <div class="service-data__item">
          <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/serviceInfo03.svg" alt="courseData" class="service-data__ num" />
          <span class="service-data__num">768</span>
          <span class="service-data__label">COURSES PUBLISHED</span>
        </div>
        <div class="service-data__item">
          <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/serviceInfo04.svg" alt="courseData" class="service-data__img" />
          <span class="service-data__num">768</span>
          <span class="service-data__label">COURSES PUBLISHED</span>
        </div>
      </div>
    </section>

    <section class="newsletter">
      <div class="newsletter__inner">
        <img src="http://mysite.local/wp-content/themes/WpPractice/img/illustration/mail.svg" alt="メルマガ登録" class="newsletter__img" />
        <div class="newsletter__content">
          <span class="newsletter__sub-ttl has-text-primary">Subscrible now</span><br />
          <span class="newsletter__ttl">Get every single <br />update you will get</span>

          <form action="" method="post" class="newsletter-form">
            <div class="newsletter-form__inner">
              <label class="newsletter-form__label">
                <img src="http://mysite.local/wp-content/themes/WpPractice/img/icon/mail.svg" alt="メールアイコン" />
              </label>
              <input type="email" name="mail" placeholder="Enter email address" class="newsletter-form__input" />
              <button type="submit" class="
                    newsletter-form__submit
                    btn
                    is-primary
                    pt-1
                    pb-1
                    pr-2
                    pl-2
                    is-size-0_8
                  ">
                Subscrible now
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <?Php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </footer>
</body>

</html>