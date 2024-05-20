import contactMap from "./contactMap";
import headerSearch from "./headerSearch";
import lateralMenu from "./lateralMenu";
import mainMenu from "./mainMenu";

jQuery(function () {
  //Main menu
  new mainMenu();
  //Header search
  new headerSearch();
  // Lateral menu
  new lateralMenu();
  //ContactMap
  if (jQuery('#contactMap').length > 0) {
    new contactMap();
  }
});
