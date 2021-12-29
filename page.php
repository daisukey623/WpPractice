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
      <h1><?php the_title(); ?></h1>
      <?php $img = get_eyecatch(); ?>
      <img src="<?php echo $img[0]; ?>" alt="" >
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <footer class="footer">
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
  </footer>
</body>

</html>