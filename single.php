<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <?php get_template_part('includes/header'); ?>
  </header>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article>

        <div class="single-header">
          <div class="single-header__inner">
            <span class="single-category has-text-primary"><?php the_category(); ?></span>
            <h1><?php the_title(); ?></h1>
          </div>
        </div>

        <div class="single-main">
          <?php
          $img = get_eyecatch();
          ?>
          <figure>
            <img src="<?php echo $img[0]; ?>" alt="">
          </figure>
          <?php the_content(); ?>
        <?php endwhile; ?>
        <div>
          <?php get_template_part('includes/sns'); ?>
        </div>
      </article>
      <section class="successful-feedback
       single-successful-feedback">
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
    <?php endif; ?>
    <footer class="footer">
      <?php get_template_part('includes/footer'); ?>
      <?php get_footer(); ?>
    </footer>
</body>

</html>