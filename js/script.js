//ハンバーガーメニュー
$('.menu').on('click',function(){
  $('.menu__line').toggleClass('active');
  $('.gnav').fadeToggle();
});


// $('.slick-slider').slick({
//   slidesToShow: 3,
//   slidesToScroll: 3,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2,
//       }
//     },
//     {
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//   ]
// });

// slider
$('.slider-1').slick({
  autoplay: true,
  autoplaySpeed: 3000,
  dots: true,
  arrows: false,
});
