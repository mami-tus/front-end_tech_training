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
  autoplay: true, //自動再生
  autoplaySpeed: 3000, //スライド切り替え時間設定
  dots: true,
  arrows: false,
    pauseOnFocus: false,//フォーカスで一時停止
    pauseOnHover: false,//マウスホバーで一時停止
    pauseOnDotsHover: false//ドットナビをマウスホバーで一時停止
});


// 文字アニメーション
document.addEventListener('DOMContentLoaded', function () {

  const els = document.querySelectorAll('.animate-title');
  const cb = function (entries, observer) {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              const ta = new TextAnimation(entry.target);
              ta.animate();
              observer.unobserve(entry.target);
          } else {
          }
      });
  };
  const options = {
      root: null,
      rootMargin: "0px",
      threshold: 0
  };
  const io = new IntersectionObserver(cb, options);
  els.forEach(el => io.observe(el));
});
