<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title>헬스장 회원 관리</title>
    <!-- 제이쿼리 모바일, 제이쿼리 라이브러리 파일 -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>  
<body>
  <!-- 출입 확인 다이알로그 --> 
  <div data-role="dialog" id="page3">
	<div data-role="header" data-theme="b">
		<h1>출입 확인</h1>
	</div>
	<div data-role="content"> 
		<h3>회원님의 휴대폰 번호를 입력하세요.</h3>
		<form name="form3" method="post" action="access_result.php" data-ajax="false">  
			<div class="ui-body ui-body-a">
				'-'를 제외하고 입력
				<input type="text" name="phone_num" value=""/>
			</div>
	        <input data-inline="true" type="submit" value="확인"/>
	        <a data-inline="true" data-role="button" href="admin.php">관리자 로그인</a>         
 		</form>					
	</div>
  </div>
</body>
</html>

