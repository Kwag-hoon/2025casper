$(document).ready(function () {

  // 상단 헤더 마우스 호버시 반전 
  //1. 변수 선언
  let h1 = $('header h1 img');
  let gnb = $('.gnb a');
  let h_icon = $('header span.fas');

  // 옆 인디케이터 변수
  let m_nav = $('#m_nav >ul li');

  // m_nav에 마우스 오버시 가로길이 늘이기
  m_nav.hover(function () {
    $(this).addClass('m_nav_on');

  }, function () {
    $(this).removeClass('m_nav_on');
  })

  //  부드럽게 스크롤
  $(".arctic_scroll").arctic_scroll({
    speed: 800
  });





  //2. 사용자가 헤더 영역에 마우스 오버시 
  $('header').mouseenter(function () {
    //3개 변수 값에 .h_txt_color서식을 추가한다. 
    gnb.addClass('h_txt_color');
    //헤더에도 .h_on을 추가
    $(this).addClass('h_on');
    // 아이콘 색상 변경
    h_icon.addClass('h_txt_color');
    // 로고 이미지 속성 src값 변경
    h1.attr('src', './images/logo-casper_black.png');
  });

  //3. 헤더영역에 마우스 아웃시 
  $('header').mouseleave(function () {
    //3개 변수 값에 .h_txt_color서식을 제거한다.
    gnb.removeClass('h_txt_color')
    //헤더에도 .h_on을 제거
    $(this).removeClass('h_on');
    // 아이콘 색상 변경
    h_icon.removeClass('h_txt_color');
    // 로고 이미지 속성 src값 변경
    h1.attr('src', './images/logo-casper-white.png');

  });

  // 모달 박스
  const modal = `
  <div class="modal">
    <div class="m_inner">
      <a href="#none" title="모달 윈도우 박스">
        <img src="./images/pc_prod_notice_20211210.jpg" alt="광고이미지">
      </a>
      <p class="btn_area">
        <input type="checkbox" id="ch">
        <label for="ch">오늘 하루 열지않기</label>
        <input type="button" value="닫기" id="c_btn">
      </p>
    </div>
  </div> `;

  $('body').append(modal);
  // 닫기 버튼 변수
  const c_btn = $('.modal #c_btn');
  let ch = $('#ch'); // 체크 박스 변수

  // 만약에 쿠키 파일이 존재 한다면 모달이 나오지 않게 한다. 
  if ($.cookie('popup') == 'none') {
    $('.modal').hide();
  }

  // 닫기 버튼 클릭시 체크 박스에 체크 여부를 판단하여 체크 되었으면 쿠기 생성
  $('#ch, #c_btn').click(function () {
    closePopup()
  });

  function closePopup() {
    if (ch.is(':checked')) {  //체크 박스가 체크가 되면 쿠키를 생성하고 저장
      $.cookie('popup', 'none', { expires: 1, path: '/' }); // 쿠키 파일 저장
      $('.modal').fadeOut(); // 모달 윈도우 사라지게 하기
    } else {

      // 체크 박스에 체크를 하지 않은 경우 라면 그냥 모달 윈도를 닫는다. 
      $('.modal').fadeOut();
    }
  }

  /* 윈도우 스크롤 이벤트  */
  $(window).scroll(function () {
    let sPos = $(this).scrollTop();  // 세로스크롤 값을 구함
    console.log(sPos); // 콘솔모드에 출력

    if (sPos >= 700) {
      //3개 변수 값에 .h_txt_color서식을 제거한다.
      gnb.addClass('h_txt_color')
      //헤더에도 .h_on을 제거
      $('header').addClass('h_on');
      // 아이콘 색상 변경
      h_icon.addClass('h_txt_color');
      // 로고 이미지 속성 src값 변경
      h1.attr('src', '../images/logo-casper_black.png');

      $('header').mouseleave(function () {
        //3개 변수 값에 .h_txt_color서식을 추가한다. 
        gnb.addClass('h_txt_color');
        //헤더에도 .h_on을 추가
        $('header').addClass('h_on');
        // 아이콘 색상 변경
        h_icon.addClass('h_txt_color');
        // 로고 이미지 속성 src값 변경
        h1.attr('src', '../images/logo-casper_black.png');
      });

    } else {
      gnb.removeClass('h_txt_color');
      $('header').removeClass('h_on');
      h_icon.removeClass('h_txt_color');
      h1.attr('src', '../images/logo-casper-white.png');

      $('header').mouseleave(function () {
        //3개 변수 값에 .h_txt_color서식을 제거한다.
        gnb.removeClass('h_txt_color')
        //헤더에도 .h_on을 제거
        $(this).removeClass('h_on');
        // 아이콘 색상 변경
        h_icon.removeClass('h_txt_color');
        // 로고 이미지 속성 src값 변경
        h1.attr('src', '../images/logo-casper-white.png');
      });
    }
    // 소개 페이지 텍스트 애니메이션
    //  화면 세로 스크롤 1,740이상일 경우 
    if (sPos >= 1690) {
      $('.intro_title_left').stop().animate({ 'left': '130px' }, 500);
      $('.intro_title_right').stop().delay(500).animate({ 'right': '150px' }, 500);
    }
  });


});      //제이쿼리


$(function () {
  var swiper = new Swiper('.top3', {
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });
});

$(function () {
  var swiper = new Swiper('.event', {
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: '.event .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.event .event .swiper-button-next',
      prevEl: '.event .swiper-button-prev',
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
  });
});


