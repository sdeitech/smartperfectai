jQuery(document).ready(function () {
  jQuery("#bannerhomepageslider").slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
    focusOnSelect: true,
    dots: true,
    infinite: true,
    swipe: true,
    swipeToSlide: true,
    arrows:false,
    cssEase: "ease-in-out",
    speed: 900,
  });

    var video = jQuery(".video-on-screen").get(0);

    if (video) {
        // Try to autoplay
        video.play().catch(function(error) {
            // If autoplay is blocked, fallback: play after user clicks anywhere
            jQuery(document).one("click touchstart", function() {
                video.play();
            });
        });
    }
});