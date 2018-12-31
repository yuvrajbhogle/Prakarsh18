$(document).ready(function(){

var scrollLink = $('.scroll');
  $('#confettiCanvas').click(function(e){
    var t = $('#del-countdown').offset().top;
    t=t-80;
    e.preventDefault();
    $('body,html').animate({
      scrollTop:t
    },1000);
  });
  // console.log("sss"+t);

  $(window).scroll(function(){
  var scrollbarlocation = $(this).scrollTop();

  var scrollbarlocation =scrollbarlocation+100;
  // console.log('scrollbarlocation');
  //
  scrollLink.each(function(){
      var error = $(this.hash).offset().top;
  // //
    console.log(error);
    console.log("s"+scrollbarlocation);
    if( error <=  scrollbarlocation){
       $(this).parent().addClass('menu-active');
       $(this).parent().siblings().removeClass('menu-active');
      }
  });

});

});
