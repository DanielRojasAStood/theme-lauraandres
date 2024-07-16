import $ from "jquery";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import "slick-carousel";

export function initSlickCarousels() {
  /* Slicks */
  $(".slickCarusel").slick({
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    fade: true,
    cssEase: "linear",
  });

  $(".slick0").slick({
    dots: false,
    slidesToShow: 3,
    navigation: {
      nextEl: ".swiper-button-next-0",
      prevEl: ".swiper-button-prev-0",
    },
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".slickPlace").slick({
    dots: false,
    slidesToShow: 4,
    navigation: {
      nextEl: ".swiper-button-next-0",
      prevEl: ".swiper-button-prev-0",
    },
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
}
