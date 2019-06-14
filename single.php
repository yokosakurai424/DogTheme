<main class="latest-container">
    <h2 class="sub-title">Latest</h2>

    <ul class="articles">
    <li>
        <?php if(has_post_thumbnail()): ?>
          <!-- サムネイルが設定されている場合 -->
          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php else: ?>
          <!-- サムネイルが設定されていない場合 -->
          <img src="dog.jpg" alt="">
        <?php endif; ?>
        <span><?php the_title(); ?></span>
        <span class="article-content"><?php the_excerpt(); ?></span>
        <a href="readMore">Read More</a>
      </li>
    </ul>
  </main>