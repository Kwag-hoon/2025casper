<?php
include './sub/header.php';
// 시승신청 폼 페이지에서 값을 전달받아 출력하기

$name = $_POST['name'];
$phone = $_POST['phone'];
$sms = $_POST['sms'];
$email = $_POST['email'];  // 라디오 버튼 값 전달받음
$region = $_POST['region'];  //select 옵션값
$car = $_POST['car'];  // 일반 텍스트
$my_car = $_POST['my_car'];  // 패스워드 값
$e_date = $_POST['e_date']; // 날짜 값

// echo $name . '<br>';
// echo $phone . '<br>';
// echo $sms . '<br>';
// echo $email . '<br>';
// echo $region . '<br>';
// echo $car . '<br>';
// echo $my_car . '<br>';
// echo $e_date  

// 1. db 입력을 위한 기본정보 변수에 담기
// 절차지향스타일 db연결

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '1234';
$mysql_db = 'kdt';

//2. 데이터 연결을 위한 변수 
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

// 3. 데이터 베이스 연결 테스트
if(!$conn){
  die('연결실패 : ' . mysqli_connect_error());

}

// 4. 연결 테스트 성공시 sql쿼리 문 작성 
$sql = "
INSERT INTO test_drive 
(name, phone, sms, email, region, s_car, my_car, e_date)
VALUES 
('$name', '$phone', '$sms', '$email', '$region', '$car', '$my_car', '$e_date')";

// 5. 쿼리문을 실행하여 db에 입력을 하도록 한다. 
$result = mysqli_query($conn, $sql);

?>
<main>
  <?php

//  6. 데이터 입력이 완료되면 메세지를 띄운다. 
echo '<p class="result_txt">시승신청완료</p>';
echo '<p><a href="test_drive_print.php" title="예약 조회하기">예약 조회하기</a></p>';

echo '<p><a href="../test_drive.php" title="">이전페이지로</a></p>';

echo '<p><a href="javascript:history.back()" title="">이전페이지로 돌아가기</a></p>';

?>
</main>

<?php
 include './sub/footer.php';
?>