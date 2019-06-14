<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php wp_get_document_title();?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <!-- 必ず、</head>の前に置くおまじない -->
  <?php wp_head();?>
</head>
<body>
  <div class="container">
    <header>
    <!-- header左側 -->
    <p class="title">About Dog</p>
    <!-- header右側 -->
    <div class="header-right">
      <p class="top">Top</p>
      <p class="latest">Latest</p>
      <p class="contact">Contact</p>

      <?php wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => 'header-navi',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        'items_wrap' => '<ul class="header-right">%3$s</ul>',
      )
    ); ?>

    </div>
    </header>
  </div>
  <!-- headerここまで -->

 