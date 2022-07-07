<?php

//movieDB 데이터베이스 연결
$conn=mysqli_connect("localhost", "gym_user", "1234", "gymDB") or die("gymDB 접속 실패 !!");

$number = $_POST["password"];

$sql="SELECT * FROM gym_admin WHERE pass = '".$number."'" ;
$result=mysqli_query($conn, $sql);

if($result) {
    $count = mysqli_num_rows($result) ;
    if ($count ==0) {
        echo "<script>alert('비밀번호가 틀렸습니다.');location.replace('admin.php');</script>";
    }
    else{
        echo "<script>alert('관리자님 반갑습니다.');location.replace('main.php');</script>";
    }
    
}
else {
    $err_msg=mysqli_error($conn);
    echo "<script>alert(\"SQL문 정보조회 오류 \\n오류내용: $err_msg\");</script>" ;
}

mysqli_close($conn);

?>
