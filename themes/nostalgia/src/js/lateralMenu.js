export default class lateralMenu {
  constructor() {
    this.contLateralMenu = '.contLateralMenu'
    this.btnCloseLateralMenu = '.btnCloseLateralMenu'
    this.btnOpenLateralMenu = '.btnOpenLateralMenu'
    this.init();
  }

  init() {
    let self = this;

    jQuery(this.btnOpenLateralMenu).on('click', () => {
      self.toggleViewLateralMenu();
    });

    jQuery(this.btnCloseLateralMenu).on('click', () => {
      self.toggleViewLateralMenu();
    });

  }

  toggleViewLateralMenu() {
    jQuery(this.contLateralMenu).fadeToggle();
  }

}
