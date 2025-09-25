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
});