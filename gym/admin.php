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
  <!-- 삭제 영화정보 검색 다이알로그 --> 
  <div data-role="dialog" id="page3">
	<div data-role="header" data-theme="b">
		<h1>관리자 로그인</h1>
	</div>
	<div data-role="content"> 
		<h3>관리자 비밀번호를 입력하세요.</h3>
		<form name="form3" method="post" action="admin_result.php" data-ajax="false">  
			<div class="ui-body ui-body-a">
				관리자 비밀번호는 '1234'입니다.
				<input type="password" name="password" value=""/>
			</div>
	        <input data-inline="true" type="submit" value="확인"/>
	        <a data-inline="true" data-role="button" data-rel="back">취소</a>         
 		</form>					
	</div>
  </div>
</body>
</html>

