const menuOpen = document.querySelector(".top-nav .menu-open");
const menuClose = document.querySelector(".top-nav .menu-close");
const menuWrapper = document.querySelector(".top-nav .menu-wrapper");
const topBannerOverlay = document.querySelector(".top-banner-overlay");

function toggleMenu() {
  menuOpen.addEventListener("click", () => {
    menuWrapper.classList.add("is-opened");
    topBannerOverlay.classList.add("is-moved");
  });
  
  menuClose.addEventListener("click", () => {
    menuWrapper.classList.remove("is-opened");
    topBannerOverlay.classList.remove("is-moved");
  });
}

toggleMenu();

// parallax
var timeout;
$('#container').mousemove(function(e){
  if(timeout) clearTimeout(timeout);
  setTimeout(callParallax.bind(null, e), 200);
  
});

function callParallax(e){
  parallaxIt(e, '.slide.one', -100);
  parallaxIt(e, '.slide.two', -70);
  parallaxIt(e, '.slide.three', -50);
  parallaxIt(e, 'img', -30);
}

function parallaxIt(e, target, movement){
  var $this = $('#container');
  var relX = e.pageX - $this.offset().left;
  var relY = e.pageY - $this.offset().top;
  
  TweenMax.to(target, 1, {
    x: (relX - $this.width()/2) / $this.width() * movement,
    y: (relY - $this.height()/2) / $this.height() * movement,
    ease: Power2.easeOut
  })
}