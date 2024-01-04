// jquery code
$(document).ready(function () {
  $(".event-slider").slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    arrows: false,

    height: "100%",

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  // // Default screen size
  // var defaultScreenSize = 1381; // Change this to your default screen size
  // // console.log("hi" + $(window).width());

  // $(window)
  //   .on("resize", function () {
  //     // Get current screen width
  //     var screenWidth = $(window).width();

  //     // Loop over each SVG
  //     $(".underline-svg").each(function () {
  //       // Get initial SVG width from width attribute
  //       var initialSvgWidth = $(this).attr("width");
  //       console.log(initialSvgWidth);

  //       // Calculate ratio
  //       var ratio = initialSvgWidth / defaultScreenSize;

  //       // Calculate new SVG width
  //       var newSvgWidth = screenWidth * ratio;
  //       console.log(newSvgWidth);

  //       // Set new SVG width
  //       $(this).css("width", newSvgWidth);
  //     });
  //   })
  //   .trigger("resize"); // Trigger resize event initially to set the width
});
