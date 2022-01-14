<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php echo bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('img/common/favicon.ico')); ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <?php wp_head() ?>
</head>

<body>
  <header class="header">
    <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
    <<?php echo $html_tag; ?> class="header__logo wrapper">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/common/logo.svg')); ?>" alt="Travel Blog" />
      </a>
    </<?php echo $html_tag; ?>>
    <nav class="header__nav">
      <ul class="wrapper">
        <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>">NEW</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/column/')); ?>">COLUMN</a></li>
        <li><a href="<?php echo esc_url(home_url('/category/hotel/')); ?>">HOTEL</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
      </ul>
    </nav>
  </header>