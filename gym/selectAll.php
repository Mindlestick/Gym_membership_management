<?php

//gymDB 데이터베이스 연결
$conn=mysqli_connect("localhost", "gym_user", "1234", "gymDB") or die("gymDB 접속 실패 !!");

$sql="SELECT * FROM gym" ;
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

$tagList = '<li data-role="list-divider">회원 목록'.'<span style="float:right">'.$count.'건'.'</span></li>';
while($row = mysqli_fetch_array($result)) {    
    	/* $tagList = $tagList.'<li><img style="margin:11px 20px;", src="'.$row["photo"].'">'; */
        $tagList = $tagList.'<h2>'.$row["id"].'</h2>';
        $tagList = $tagList.'<p> 휴대폰번호 : '.$row["phone_num"].' </p>';         
        $tagList = $tagList.'<p> 생년월일 : '.$row["birth"].'</p></li>';
        $tagList = $tagList.'<p> 성별 : '.$row["sex"].'</p></li>';
        $tagList = $tagList.'<p> 마지막 방문일시 : '.$row["last_visit"].'</p></li>';
}

mysqli_free_result($result);
mysqli_close($conn);

?>

<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title>영화 관리</title>
    <!-- 제이쿼리 모바일, 제이쿼리 라이브러리 파일 -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>	
</head>  
<body>
<!-- 전체 영화조회 화면 -->
  <div data-role="page" id="page4">
	<div data-role="header" data-position="fixed" data-theme="b">
		<a href="#" data-icon="back" data-rel="back">Back</a>
		<h1>회원 정보</h1>
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
		<ul data-role="listview" data-divider-theme="b" data-inset="true">
		       <?php echo $tagList ?>
		</ul>       
	</div>	
	<div data-role="footer" data-position="fixed" data-theme="b">
		<h4>gym & fitness center</h4>
    </div>
  </div>
</body>
</html>