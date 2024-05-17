export default class mainMenu {
  constructor() {
    this.btnMobileMenu = '.btnMobileMenu';
    this.contMobileMenu = '.contMobileMenu';
    this.btnCloseMobileMenu = '.btnCloseMobileMenu';
    this.init();
  }

  init() {
    let self = this;
    jQuery(this.btnMobileMenu).on('click', () => {
      self.toggleViewMobileMenu();
    });

    jQuery(this.btnCloseMobileMenu).on('click', () => {
      self.toggleViewMobileMenu();
    });
  }

  toggleViewMobileMenu() {
    jQuery(this.contMobileMenu).fadeToggle();
  }
}
