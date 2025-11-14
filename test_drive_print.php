<!-- 상단 헤더 연결 -->
<?php
 include './sub/header.php';
?>

<!-- 메인 콘텐츠 -->
<main id="test_drive">
  <div class="sub_top"> <!-- 백그라운드 이미지 넣기   -->
     <nav>홈 &gt; 체험 &gt; <b>예약 조회</b></nav>
     <h2>예약 조회</h2>
     <p>예약 조회를 위한 페이지입니다. </p>
  </div>
  <section>
    <h2>시승신청 온라인 예약조회</h2>
    <form action="" name="예약 조회" method="post">
      <fieldset>
        <legend>시승신청 온라인 예약조회</legend>
        <?php

         //1. db 변수선언과 값설정
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_password = '1234';
        $mysql_db = 'kdt';

        // 2. db정보를 conn변수에 담는다. 
        $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
        
        // 3. db 접속이 실패시 에러띄우고, 성공하면 쿼리문을 실행한다. 
         if(!$conn){  // 연결 실패한다면 
          die('연결 실패: ' . mysqli_connect_error()); // 오류 메세지 띄우고 접속 종료.
        }

        // 4. db접속이 이상 없으면 쿼리문 실행 
        $query = 'select * from test_drive';

        // 5. 쿼리문 조회 결과를 result 변수에 담는다. 
        $result = mysqli_query($conn, $query);

        // 6. 내용을 출력 (제목줄, 내용줄)
        print "<table><caption>예약조회 리스트 </caption>" . 
        "<thead>" .
        "<tr>" .
        "<th>No.</th>" .
        "<th>성명</th>" .
        "<th>연락처</th>" .
        "<th>수신여부</th>" .
        "<th>메일</th>" .
        "<th>지점명</th>" .
        "<th>시승차</th>" .
        "<th>보유중인 차</th>" .
        "<th>신청날짜</th>" . 
        "</tr></thead>" ;
        "<tbody>";


        //7. 반복문 for, while, do while
         while($row = mysqli_fetch_row($result)){
        print '<tr><td>' . $row[0] . '</td>'.
         '<td>' . $row[1] . '</td>' . 
         '<td>' . $row[2] . '</td>' . 
         '<td>' . $row[3] . '</td>' . 
         '<td>' . $row[4] . '</td>' .
         '<td>' . $row[5] . '</td>' . 
         '<td>' . $row[6] . '</td>' . 
         '<td>' . $row[7] . '</td>' . 
         '<td>' . $row[8] . '</td>' .
         '</tr>';
  }     // 한줄씩 데이터를 가져와라.
  print '</tbody></table>';
  print '예약조회 : <input type="search"><input type="submit" value="예약조회하기">';

  //  8. 출력이 완료되면 쿼리문 종료 db접속 종료
    mysqli_free_result($result); // 메모리 비운다
    mysqli_close($conn); // db접속종료
         
        ?>
      </fieldset>
    </form>
  </section>
</main>





<?php
 include './sub/footer.php';
?>