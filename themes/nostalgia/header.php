<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <script>
    var nostalgia = {
      ajaxurl: '<?php echo admin_url('admin-ajax.php'); ?>',
      homeurl: '<?php echo esc_url(home_url('/')); ?>',
      nonce: '<?php echo wp_create_nonce('wp_rest'); ?>',
      lang: '<?php echo get_locale(); ?>'
    }
  </script>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="contHeaderSearch">
    <div class="container px-4 mx-auto max-w-7xl">
      <div class="flex justify-between items-center text-white mb-12">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png" alt="nostalgia" width="40"
          height="auto" />
        <i class="fa fa-times text-4xl btnCloseHeaderSearch" aria-hidden="true"></i>
      </div>
      <?php //TODO: Corregir formulario de busqueda. get_search_form(); ?>
      <form action="#" class="formHeaderSearch">
        <input type="text" class="formHeaderSearch__input" placeholder="Search" />
        <button type="submit" class="formHeaderSearch__btn">
          <i class="fa fa-search text-white formHeaderSearch__icon" aria-hidden="true"></i>
        </button>
      </form>
    </div>
  </div>
  <div class="contLateralMenu">
    <div class="contLateralMenu__container">
      <div class="flex items-center justify-between">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-barra.png" alt="nostalgia" width="38"
          height="auto" />
        <i class="fa fa-times text-4xl btnCloseLateralMenu" aria-hidden="true"></i>
      </div>
      <ul class="lateralMenu">
        <li class="lateralMenu__item">
          <a href="https://facebook.com" target="_blank" rel="noreferrer noopener" class="lateralMenu__link">
            <i class="fa fa-facebook lateralMenu__icon" aria-hidden="true"></i>
            <p class="lateralMenu__text">Facebook</p>
          </a>
        </li>
        <li class="lateralMenu__item">
          <a href="https://instagram.com" target="_blank" rel="noreferrer noopener" class="lateralMenu__link">
            <i class="fa fa-instagram lateralMenu__icon" aria-hidden="true"></i>
            <p class="lateralMenu__text">Instagram</p>
          </a>
        </li>
        <li class="lateralMenu__item">
          <a href="https://youtube.com" target="_blank" rel="noreferrer noopener" class="lateralMenu__link">
            <i class="fa fa-youtube-play lateralMenu__icon" aria-hidden="true"></i>
            <p class="lateralMenu__text">Youtube</p>
          </a>
        </li>
      </ul>
      <div class="border-t border-black-400 pt-8">
        <p class="text-3xl font-noirPro-medium text-black-500 mb-2">+ (507) 2690-160</p>
        <p class="text-base font-noirPro-regular text-black-400">soporte@nostalgia.com.pa</p>
      </div>
    </div>
  </div>
  </div>
  <div class="contMobileMenu">
    <div class="container px-4 mx-auto pt-5">
      <div class="flex justify-between items-center text-white mb-12">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile.png" alt="nostalgia" width="40"
          height="auto" />
        <i class="fa fa-times text-4xl btnCloseMobileMenu" aria-hidden="true"></i>
      </div>
      <div>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id' => 'mobileMenu',
            'menu_class' => 'mobileMenu',
          )
        );
        ?>
      </div>
    </div>
  </div>
  <div class="container max-w-7xl px-4 py-4 md:py-8">
    <div class="flex justify-between items-center">
      <div class="w-[120px] h-auto lg:w-[189px]">
        <?php the_custom_logo(); ?>
      </div>
      <div class="hidden md:block">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id' => 'primaryMenu',
          )
        );
        ?>
      </div>
      <div class="menuHeaderIcons">
        <div class="headerShoppingCart">
          <div class="headerShoppingCart__circle">
            <p class="headerShoppingCart__quantity">2</p>
          </div>
          <i class="fa fa-shopping-bag menuHeaderIcons__icon" aria-hidden="true"></i>
        </div>
        <i class="fa fa-search menuHeaderIcons__icon btnOpenHeaderSearch" aria-hidden="true"></i>
        <i class="fa fa-bars menuHeaderIcons__icon hidden md:block btnOpenLateralMenu" aria-hidden="true"></i>
        <i class="fa fa-bars menuHeaderIcons__icon btnMobileMenu md:hidden" aria-hidden="true"></i>
      </div>
    </div>
  </div>