export default class headerSearch {
  constructor() {
    this.contHeaderSearch = '.contHeaderSearch';
    this.btnOpenHeaderSearch = '.btnOpenHeaderSearch';
    this.btnCloseHeaderSearch = '.btnCloseHeaderSearch';
    this.init();
  }

  init() {
    let self = this;

    jQuery(this.btnOpenHeaderSearch).on('click', () => {
      self.toggleViewHeaderSearch();
    });

    jQuery(this.btnCloseHeaderSearch).on('click', () => {
      self.toggleViewHeaderSearch();
    });
  }

  toggleViewHeaderSearch() {
    jQuery(this.contHeaderSearch).fadeToggle();
  }
}
