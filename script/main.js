$(document).ready(function(){

// 상단 헤더 마우스 호버시 반전 
//1. 변수 선언
let h1 = $('header h1 img');
let gnb = $('.gnb a');
let h_icon = $('header span.fas');

//2. 사용자가 헤더 영역에 마우스 오버시 
$('header').mouseenter(function(){
//3개 변수 값에 .h_txt_color서식을 추가한다. 
  gnb.addClass('h_txt_color');
  //헤더에도 .h_on을 추가
  $(this).addClass('h_on');
  // 아이콘 색상 변경
  h_icon.addClass('h_txt_color');
  // 로고 이미지 속성 src값 변경
  h1.attr('src','./images/logo-casper_black.png');
});

//3. 헤더영역에 마우스 아웃시 
$('header').mouseleave(function(){
  //3개 변수 값에 .h_txt_color서식을 제거한다.
  gnb.removeClass('h_txt_color')
  //헤더에도 .h_on을 제거
  $(this).removeClass('h_on');
  // 아이콘 색상 변경
  h_icon.removeClass('h_txt_color');
  // 로고 이미지 속성 src값 변경
  h1.attr('src','./images/logo-casper-white.png');

});








});
