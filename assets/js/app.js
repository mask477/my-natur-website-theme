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

  if (document.getElementById("customers")) {
    // Customers slider
    var customers = new Splide("#customers", {
      type: "loop",
      drag: "free",
      snap: true,
      perPage: 3,
      perMove: 1,
      breakpoints: {
        1260: {
          perPage: 2,
        },
        850: {
          perPage: 1,
        },
      },
      arrows: true,
      pagination: false,
    });

    customers.mount();
  }

  if (document.getElementById("clients")) {
    // Team members slider
    var teamMembersSlider = new Splide("#clients", {
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
      pagination: false,
      cloneStatus: true,
    });

    teamMembersSlider.mount();
  }

  if (document.getElementById("teamSlider")) {
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
      pagination: false,
      cloneStatus: true,
    });

    teamMembersSlider.mount();
  }

  if (document.getElementById("about-projects")) {
    // Projects slider
    var projectsSlider = new Splide("#about-projects", {
      type: "loop",
      drag: "free",
      snap: true,
      perPage: 3,
      perMove: 1,
      breakpoints: {
        1260: {
          perPage: 2,
        },
        850: {
          perPage: 1,
        },
      },
      arrows: true,
      pagination: false,
    });

    projectsSlider.mount();
  }
});
