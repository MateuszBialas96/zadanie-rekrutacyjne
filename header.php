<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php wp_title("|", true, "right"); ?> </title>
    <link rel="pingback" href="
						<?php bloginfo("pingback_url"); ?>" /> <?php if (is_singular()) {
    wp_enqueue_script("comment-reply");
} ?> <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="header-content">
        <div class="header-content__wrapper1 auto-layout"> <?php if (
            get_field("logo_naglowek", "options")
        ): ?> <img src="
										<?php the_field(
              "logo_naglowek",
              "options"
          ); ?>" /> <?php endif; ?><input type="checkbox" id="hamburger">
          <label for="hamburger">
            <span></span>
          </label> <?php wp_nav_menu([
              "menu" => "header_menu",
              "theme_location" => "header_menu",
              "depth" => 2,
              "menu_class" => "menu",
              "container" => false,
          ]); ?>
        </div>
        <div class="header-content__wrapper2 auto-layout">
          <div class="header-content__wrapper2--menu-button-container auto-layout">
            <button class="blue-button">Menu button</button>
          </div>
          <div class="header-content__wrapper2--search-container auto-layout">
            <input type="text" placeholder="Search.." name="search">
            <button class="button-submit" type="submit"></button>
          </div>
        </div>
      </div>
    </header>