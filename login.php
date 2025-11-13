
<!-- 상단 헤더 연결 -->
<?php
 include './sub/header.php';
?>
<main>
  <form name="로그인" method="post" action="login_check.php">
    <fieldset>
      <legend>로그인</legend>
      <p>
        <label for="id_txt">
        <input type="text" placeholder="아이디입력" id="id_txt" name="id_txt">
      </p>
      <p>
        <label for="pw_txt">
        <input type="text" placeholder="패스워드" id="pw_txt" name="pw_txt">
      </p>
      <p>
        <input type="checkbox" id="id_check" >
        <label for="id_check"> 아이디 저장</label>
        
      </p>
      <p>
        <input type="submit" id="login_btn" value="로그인" >

      </p>
      <p>
        <a href="#none" title="아이디 찾기">아이디 찾기</a>
        <a href="#none" title="비밀번호 찾기">비밀번호 찾기</a>
        <a href="./php/register.php" title="회원가입">회원가입</a>
      </p>
    </fieldset>
  </form>

</main>
<!-- 제이쿼리 쿠키 파일 -->
<script src="./script/jquery.cookie.js"></script>
<script>
  $(document).ready(function(){
   
  //1. 쿠키 이름 지정 (개발자가 알아서)
  let key = $.cookie('idChk'); // 

  // 2. 만약에 브라우저에 key변수에 값이 저장되어 있다면 
  if(key){ 
    $('#id_txt').val(key);  // id값을 id박스안에 표시되어야 
    $('#id_check').prop('checked', true); // 체크박스에 체크가 되어 있으면, 
  }

  //3. 체크박스를 체크하지 않고 다시 체크를 풀 경우(쿠키 저장히지 않겠다. / 삭제)
  $('#id_check').change(function(){
    if($(this).is(':checked')){  //is메서드는 체크여부를 true/false로 알려줌 
      // 쿠키 생성하기
      $.cookie('idChk', $('#id_txt').val(), {expire:7, path:'/'});
    }else{  // 체크를 하지 않은 경우
      // 쿠키 생성하지 않음
      $.removeCookie('idChk', {path:'/'})

    }
  });

// 4. 아이디 입력시 쿠키 생성 (선택사항)
 $('#mb_id').keyup(function(){
    if($('#id_check').is(':checked')){  // 체크박스에 체크가 된 경우라면 
      $.cookie('idChk', $(this).val(),{expire:7, path:'/'}); // 쿠키를 생성한다. 
    }
  });

  });

</script>

<!-- 하단 푸터 연결 -->

<?php
 include './sub/footer.php';
?>