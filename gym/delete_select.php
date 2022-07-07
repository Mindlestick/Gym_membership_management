<?php

//gymDB 데이터베이스 연결
$conn=mysqli_connect("localhost", "gym_user", "1234", "gymDB") or die("gymDB 접속 실패 !!");

$id = $_POST["sid3"];

$sql="SELECT * FROM gym WHERE id = '".$id."'" ;
$result=mysqli_query($conn, $sql);

if($result) {
    $count = mysqli_num_rows($result) ;
    if ($count ==0) {
        echo "<script>alert('해당 정보가 없습니다');location.replace('main.php');</script>";
    }
}
else {
    $err_msg=mysqli_error($conn);
    echo "<script>alert(\"SQL문 정보조회 오류 \\n오류내용: $err_msg\");</script>" ;
}

$row = mysqli_fetch_array($result);
$id = $row['id'];
$phone_num = $row['phone_num'];
$sex = $row['sex'];
$birth = $row['birth'];

mysqli_close($conn);

?>

<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title>회원 관리</title>
    <!-- 제이쿼리 모바일, 제이쿼리 라이브러리 파일 -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>	
</head>  
<body>
  <!-- 회원정보 삭제 화면 --> 
  <div data-role="page" id="page3">
	<div data-role="header" data-position="fixed" data-theme="b">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>영화 정보</h1>
		<a href="main.php" data-icon="home" data-iconpos="notext">Home</a>
		<div data-role="navbar">
			<ul>
				<li><a href="insert.php">가입</a></li>
				<li><a href="update.php">수정</a></li>
				<li><a href="delete.php">탈퇴</a></li>
				<li><a href="selectAll.php">전체검색</a></li>
			</ul>
		</div>
	</div>
	<div data-role="content"> 
			<h3>회원 정보 삭제</h3>
			<form name="form3-1" method="post" action="delete_result.php" data-ajax="false">  
			<div class="ui-body ui-body-a">
				<label for="sex3" class="select">성별:</label>
				<select name="sex3" data-native-menu="false" data-mini="true" data-inline="true">
					<option value="<?php echo $sex ?>"><?php echo $sex ?></option>
					<option value="남">남</option>
					<option value="여">여</option>
				</select>	
				<label for="id3">회원명:</label>
				<input type="text" name="id3" value=<?php echo $id ?> data-mini="true"  />
				<label for="phone_num3">휴대폰 번호:</label>
				<input type="text" name="phone_num3" value=<?php echo $phone_num ?> data-mini="true">
				<label for="birth3">생년월일:</label>
				<input type="text" name="birth3" value=<?php echo $birth ?> data-mini="true">            
            </div>
 			<div class="ui-body">
				<fieldset class="ui-grid-a">
					<div class="ui-block-a"><input type="reset" value="취소"/></div>
					<div class="ui-block-b"><input type="submit" value="삭제"/></div>
				</fieldset>
			</div>
			</form> 
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<h4>gym & fitness center</h4>
    </div>
  </div>
</body>
</html>
