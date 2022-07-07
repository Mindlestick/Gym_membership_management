<!Doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page" id="page0">
		<div data-role="header" data-position="fixed" data-theme="b">
			<h1>헬스장 회원 관리</h1>
			<a href="access.php" data-icon="home" data-iconpos="notext" class="ui-btn-right">Home</a>
		</div>
		<div data-role="content">
			<img style="margin: 20px auto; display: block;" src="cinema.png">
			<ul data-role="listview" data-inset="true">
				<li><a href="insert.php">회원가입</a></li>
				<li><a href="update.php">회원 정보 갱신</a></li>
				<li><a href="delete.php">회원탈퇴</a></li>
				<li><a href="selectAll.php">전체 회원 조회</a></li>
			</ul>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h4>Gym Web App 박민지</h4>
		</div>
		</div>
</body>
</html>