<!-- header.phpを読み込む -->
<?php get_header(); ?>

  <!-- 犬の画像 -->
   <div>
   <img class="top-image" src="dog.jpg" alt="">
   </div>

<main class="latest-container">
    
    <?php if (have_posts()): ?>

    <p class="sub-title">Latest</p>
    <ul class="articles">

     <?php while(have_posts()): the_post(); ?>

     <li class="article">
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img class="article-thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <img class="article-thumbnail" src="http://placehold.jp/300x300.png?text=No Image" alt="">
        <?php endif; ?>
        <span><?php the_title(); ?></span>
        <p class="article-content"><?php the_excerpt(); ?></p>
        <p class="readMore"><a href="<?php the_permalink(); ?>">Read More</a></p>
      </li>

    <?php endwhile; ?>

    </ul>

    <?php else: ?>
      <p class="sub-title">No Posts Yet</p>
    <?php endif; ?>
  </main>


</div>

  <!-- お問い合わせフォームを読み込む -->
  <?php get_template_part('contact'); ?>

<!-- footer.phpを読み込む -->
  <?php get_footer(); ?>