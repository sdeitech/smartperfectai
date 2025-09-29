jQuery(document).ready(function ($) {
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
  var video = $(".video-on-screen").get(0);
  if (video) {
    video.muted = true;
    var playPromise = video.play();
    if (playPromise !== undefined) {
      playPromise.catch(function() {
        $(document).one("click touchstart", function() {
            video.play();
        });
      });
    }
  }
});