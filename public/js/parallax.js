// parallax https://greensock.com/get-started https://codepen.io/GreenSock/pen/OeqgrZ
var timeout;
$('body').mousemove(function(e){
  if(timeout) clearTimeout(timeout);
  setTimeout(callParallax.bind(null, e), 200);
  
});

function callParallax(e){
  parallaxIt(e, '.slide.one', -70);
  parallaxIt(e, '.slide.two', -200);
  parallaxIt(e, '.slide.three', -300);
  parallaxIt(e, '.four', 70);
  parallaxIt(e, 'img', 5);
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