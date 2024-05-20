// JavaScript
document.addEventListener("DOMContentLoaded", function () {
  var accordions = document.querySelectorAll(".accordion-item");

  for (var i = 0; i < accordions.length; i++) {
    var accordion = accordions[i];
    var accordionButton = accordion.querySelector("div");
    var accordionPanel = accordion.querySelector(".accordion-panel");

    accordionButton.addEventListener("click", function () {
      var isExpanded = this.getAttribute("aria-expanded") == "true";
      this.setAttribute("aria-expanded", !isExpanded);
      this.nextElementSibling.setAttribute("aria-hidden", isExpanded);

      if (!isExpanded) {
        this.nextElementSibling.style.maxHeight =
          this.nextElementSibling.scrollHeight + "px";
      } else {
        this.nextElementSibling.style.maxHeight = "0";
      }
    });
  }
});
