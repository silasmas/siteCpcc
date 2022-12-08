$(document).ready(function() {
    // slide Promotion
    var owl = $("#slider-carousel");
    owl.owlCarousel({
      items: 1,
      itemsDesktop: [1000, 1],
      itemsDesktopSmall: [900, 1],
      itemsTablet: [600, 1],
      itemsMobile: false,
      // pagination: false,
      autoplay: true
    });
    $(".next").click(function() {
      owl.trigger('owl.next');
    })
    $(".prev").click(function() {
      owl.trigger('owl.prev');
    })

    // slide produit
    var owl_1 = $("#slider-produit");
    owl_1.owlCarousel({
      items: 1,
      itemsDesktop: [1000, 4],
      itemsDesktopSmall: [900, 2],
      itemsTablet: [600, 1],
      itemsMobile: false,
      // pagination: false,
      autoplay: true
    });
});