<footer class="bg-black-400 pb-9 pt-12 md:pt-24">
  <div class="container max-w-7xl px-4">
    <div class="grid grid-cols-12 gap-8 lg:gap-12 xl:gap-28 mb-14">
      <div class="col-span-12 md:col-span-4">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="nostalgia" width="300"
          height="81" />
        <p class="text-white mt-10 mb-9">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.
          ullamcorper mattis. ullamcorper mattis.
        </p>
        <ul class="footerSocialMediaMenu">
          <li class="footerSocialMediaMenu__item">
            <a href="https://facebook.com" target="_blank" title="Facebook" rel=" noreferrer noopener"
              class="footerSocialMediaMenu__link footerSocialMediaMenu__link--circle footerSocialMediaMenu__link--black">
              <i class="fa fa-facebook footerSocialMediaMenu__icon" aria-hidden="true"></i>
            </a>
          </li>
          <li class="footerSocialMediaMenu__item">
            <a href="https://instagram.com" target="_blank" title="instagram" rel=" noreferrer noopener"
              class="footerSocialMediaMenu__link">
              <i class="fa fa-instagram footerSocialMediaMenu__icon" aria-hidden="true"></i>
            </a>
          </li>
          <li class="footerSocialMediaMenu__item">
            <a href="https://youtube.com" target="_blank" title="youtube" rel=" noreferrer noopener"
              class="footerSocialMediaMenu__link">
              <i class="fa fa-youtube-play footerSocialMediaMenu__icon" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-span-12 md:col-span-4">
        <div class="footerMenuList flex gap-24">
          <div>
            <p class="footerMenuList__title">Enlaces</p>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id' => 'footerPrimaryMenu',
                'menu_class' => 'footerMenuList__menu',
              )
            );
            ?>
          </div>
          <div>
            <p class="footerMenuList__title">Categorías</p>
            <ul class="footerMenuList__menu">
              <li><a href="">Home</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-span-12 md:col-span-4">
        <ul class="footerMenuList">
          <p class="footerMenuList__title">Información de contacto</p>
          <ul class="mb-8 md:mb-16">
            <li class="mb-3">
              <p>
                <i class="fa fa-map-marker mr-2"></i> Paitilla, al lado del Consulado de Colombia, Panamá
              </p>
            </li>
            <li class="mb-3">
              <p>
                <i class="fa fa-phone mr-2"></i> + (507) 2690-160
              </p>
            </li>
            <li class="mb-3">
              <p>
                <i class="fa fa-envelope mr-2"></i> soporte@nostalgia.com.pa
              </p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary font-noirPro-medium">CONTÁCTANOS</a>
      </div>
    </div>
  </div>
  <div
    class="border-t border-white pt-8 text-white text-center flex flex-col md:flex-row gap-3 items-center justify-center">
    <p>
      &copy; <?php echo date('Y'); ?> Nostalgia Design Studio. Todos los derechos reservados
    </p>
    <p class="hidden md:block">|</p>
    <p>Desarrollado por: <a href="https://bluetide.dev" target="_blank" rel="noopener noreferrer">BlueTide</a></p>
  </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>