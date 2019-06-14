<?php get_header(); ?>

<div class="content">
  <main class="curriculum">
      <h1>固定ページ</h1>

  <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <h1><a> <?php the_title(); ?></a></h1>

    <?php if(has_post_thumbnail()): ?> <!-- もしこの投稿にアイキャッチ画像があれば -->
      <img class ="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <?php else: ?> <!-- もしこの投稿にアイキャッチ画像がなければ -->
      <img class ="article-thumbnail" src="http://placehold.jp/300x300.png?text=No Image" alt="">
    <?php endif; ?>
    
    <p><?php the_content(); ?></p>

    <?php endwhile; endif; ?>

    <?php previous_post_link('%link', '前へ'); ?>
    <?php next_post_link('%link', '次へ'); ?>

  </main>

  <?php get_sidebar(); ?>
  
</div>


<?php get_footer(); ?>