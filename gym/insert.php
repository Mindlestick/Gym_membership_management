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
 <!-- 회원가입 화면 --> 
  <div data-role="page" id="page1">
	<div data-role="header" data-position="fixed" data-theme="b">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>회원가입</h1>
		<a href="main.php" data-icon="home" data-iconpos="notext">Home</a>
		<div data-role="navbar">
			<ul>
				<li><a href="insert.php">가입</a></li>
				<li><a href="update.php">갱신</a></li>
				<li><a href="delete.php">탈퇴</a></li>
				<li><a href="selectAll.php">전체검색</a></li>
			</ul>
		</div>
	</div>
	<div data-role="content">
		<form name="form1" method="post" enctype="multipart/form-data" action="insert_result.php" data-ajax="false">  
			<h3>회원 정보 입력</h3>
			<div class="ui-body ui-body-a">
				<label>이름:</label>
				<input type="text" name="id1" value="" data-mini="true"/>	
				<label>휴대폰번호(- 제외하고 입력):</label>
				<input type="text" name="phone_num1" value="" data-mini="true">		

				<label class="select">성별:</label>
				<select name="sex1" data-native-menu="false" data-mini="true" data-inline="true">
					<option value="남">남</option>
					<option value="여">여</option>
				</select>			
				<label>생년월일(yyyy-mm-dd):</label>
				<input type="text" name="birth1" value="" data-mini="true">	
            </div>
			<div class="ui-body">
				<fieldset class="ui-grid-a">
					<div class="ui-block-a"><input type="reset" value="입력 초기화"/></div>
					<div class="ui-block-b"><input type="submit" value="회원가입"/></div>
				</fieldset>
			</div>
		</form> 
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
		<h4>Movie Web App 박민지</h4>
    </div>
  </div>
</body>
</html>
