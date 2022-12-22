document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 1) {
      document.getElementById("navbar_top").classList.add("fixed-top");
      // add padding top to show content behind navbar
      navbar_height = document.querySelector(".navbar").offsetHeight;
      document.body.style.paddingTop = navbar_height + "px";
    } else {
      document.getElementById("navbar_top").classList.remove("fixed-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });

  // Team members slider
  var teamMembersSlider = new Splide("#teamSlider", {
    type: "loop",
    drag: "free",
    snap: true,
    perPage: 5,
    breakpoints: {
      1340: {
        perPage: 4,
      },
      1040: {
        perPage: 3,
      },
      992: {
        perPage: 2,
      },
      576: {
        perPage: 1,
      },
    },
    arrows: false,
    paagination: false,
  });

  teamMembersSlider.mount();
});
