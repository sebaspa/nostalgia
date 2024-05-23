import contactMap from "./contactMap";
import headerSearch from "./headerSearch";
import lateralMenu from "./lateralMenu";
import mainMenu from "./mainMenu";
import productsCustomFields from "./productsCustomFields";

jQuery(function () {
  //Main menu
  new mainMenu();
  //Header search
  new headerSearch();
  // Lateral menu
  new lateralMenu();
  //ContactMap
  if (jQuery("#contactMap").length > 0) {
    new contactMap();
  }

  if (jQuery("#product-custom-fields").length > 0) {
    new productsCustomFields();
  }
});
