$(document).ready(function () {

  // Get the current year
  const currentYear = new Date().getFullYear();
  // Set the year dynamically
  $("#currentYear").text(currentYear);

  $(".cus-accordion-header").click(function () {
    let $accordionBody = $(this).next(".cus-accordion-body");
    let $icon = $(this).find(".icon");

    // Close all other accordion bodies except the clicked one
    $(".cus-accordion-body").not($accordionBody).slideUp();

    // Hide all minus icons and show plus icons
    $(".icon .plus-icon").show();
    $(".icon .minus-icon").hide();

    // Toggle current accordion body
    $accordionBody.slideToggle();

    // Toggle active class for styling
    $(this).parent().toggleClass("active");

    // Toggle icons visibility for the clicked accordion
    let isOpen = $(this).parent().hasClass("active");
    $icon.find(".plus-icon").toggle(!isOpen);
    $icon.find(".minus-icon").toggle(isOpen);
  });

  // Initially hide all minus icons (only plus should be visible)
  $(".minus-icon").hide();




  $("#bar-icon").on("click", function () {
    $("#mobile-menu-wrapper").toggleClass("is_open");
  })
  $("#close-icon").on("click", function () {
    $("#mobile-menu-wrapper").removeClass("is_open");
  })
  $("#mobile-menu-wrapper .mobile-nav-wrapper ul clickToClose").on("click", function () {
    $("#mobile-menu-wrapper").removeClass("is_open");
  })

  $("#mobile-menu-wrapper .mobile-nav-wrapper .btn-wrapper button").on("click", function () {
    $("#mobile-menu-wrapper").removeClass("is_open");
  })



});
