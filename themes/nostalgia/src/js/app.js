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
});
