<!-- 상단 헤더 연결 -->
<?php
 include './sub/header.php';
?>

<!-- 메인 콘텐츠 -->
<main id="test_drive">
  <div class="sub_top"> <!-- 백그라운드 이미지 넣기   -->
     <nav>홈 &gt; 체험 &gt; <b>시승신청</b></nav>
     <h2>시승신청</h2>
     <p>캐스퍼가 제공하는 편리한 시승 서비스를 이용해 보세요</p>
  </div>
  <section>
    <h2>시승신청 온라인 예약</h2>
    <form action="db_insert.php" name="시승신청" method="post">
      <fieldset>
        <legend>시승신청 온라인 예약</legend>
        <p>
          <label for="name">고객명:</label>
          <input type="text" name="name" required >
        </p>
        <p>
          <label for="phone">휴대푠:</label>
          <input type="text" name="phone" required >
        </p>
        <p>SMS 수신여부 : 
          <label for="s01">수신</label>
          <input type="radio" name="sms" id="s01" value="Y" required >
          <label for="s02">미수신</label>
          <input type="radio" name="sms" id="s02" value="N" required >
        </p>
        <p>
          <label for="email">이메일 주소</label>
          <input type="text" name="email" required >
        </p>
        <p>
          <label for="region">전시장 선택:</label>
          <select name="region" id="region">
            <option value="">전시장 선택</option>
            <option value="강남점">강남점</option>
            <option value="송파점">송파점</option>
            <option value="한남점">한남점</option>
            <option value="용산점">용산점</option>

          </select>
        </p>
        <p>
          <label for="s_car">차량 선택:</label>
          <select name="car" id="s_car" required>
            <option value="캐스퍼">캐스퍼</option>
            <option value="캐스퍼 인스퍼레이션">캐스퍼 인스퍼레이션</option>
            <option value="소나타">소나타</option>
            <option value="그랜저">그랜저</option>
            <option value="제네시스">제네시스</option>

          </select>
        </p>
        <p>
          <label for="my_car">보유차종 : </label>
          <input type="text" name="my_car" required >
        </p>
        <p>
          <label for="">시승희망일 : </label>
          <input type="date" name="e_date" required >
        </p>
        <p>
          <input type="submit" value="예약하기" class="btn02">
          <input type="reset" value="취소하기" class="btn03">
        </p>
      </fieldset>
    </form>
  </section>
</main>





<?php
 include './sub/footer.php';
?>