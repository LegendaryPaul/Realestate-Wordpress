<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Estate</title>

    <!-- <link rel="stylesheet" href="./dist/css/main.min.css" /> -->
    <?php wp_head(); ?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
    />

    <script
      src="https://kit.fontawesome.com/b062f6ff8a.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Header -->

    <header class="header">
      <div class="container">
        <div class="header__wrapper d--flex align--end justify--between">
          <div class="header__branding">
            <a href="index.html"> <img src="<?php echo get_template_directory_uri(); ?>./img/logo.jpg" alt="" /></a>
          </div>

          <nav class="header__nav">
            <ul class="d--flex">
              <?php wp_menu_li();?>
            </ul>
          </nav>
        </div>
        <div class="header__actions">
          <nav class="mobile__nav">
            <ul class="d--flex">
            <?php wp_menu_li();?>
            </ul>
          </nav>
        </div>

        <div class="toggle__menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>