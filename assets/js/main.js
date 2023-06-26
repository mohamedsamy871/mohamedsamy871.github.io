$("#owl-audio").owlCarousel({
  loop: false,
  dots: false,
  items: 1,
  autoplay: false,
  nav: true, // Show next and prev buttons
  slideSpeed: 150,
  paginationSpeed: 200,
  singleItem: true,
  autoHeight: true,
  responsive: {
      0: {
          items: 1,
      },
      600: {
          items: 1,
      },
      1000: {
          items: 1,
      }
  }
});

$("#owl-categories").owlCarousel({
    loop: true,
    dots: true,
    items: 4,
    autoplay: true,
    nav: true, // Show next and prev buttons
    slideSpeed: 150,
    paginationSpeed: 200,
    singleItem: false,
    autoHeight: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        }
    }
  });
  $("#owl-prefooter-carousel").owlCarousel({
    loop: true,
    dots: false,
    items: 3,
    autoplay: true,
    nav: false, // Show next and prev buttons
    slideSpeed: 150,
    paginationSpeed: 200,
    singleItem: false,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        }
    }
  });
  $("#owl-offers").owlCarousel({
    loop: true,
    dots: false,
    items: 4,
    autoplay: true,
    nav: false, // Show next and prev buttons
    slideSpeed: 150,
    paginationSpeed: 200,
    singleItem: false,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 4,
        }
    }
  });
  $("#owl-about-tamima").owlCarousel({
    loop: true,
    dots: false,
    items: 5,
    autoplay: true,
    nav: false, // Show next and prev buttons
    slideSpeed: 500,
    paginationSpeed: 200,
    singleItem: false,
    autoHeight: true,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
        }
    }
  });
  $("#owl-carousel-imgs").owlCarousel({
    loop: true,
    dots: false,
    items: 2,
    autoplay: true,
    nav: true, // Show next and prev buttons
    slideSpeed: 150,
    paginationSpeed: 200,
    singleItem: true,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 2,
        }
    }
});

