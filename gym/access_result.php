<?php

//gymDB 데이터베이스 연결
$conn=mysqli_connect("localhost", "gym_user", "1234", "gymDB") or die("gymDB 접속 실패 !!");

$number = $_POST["phone_num"];

$sql="SELECT * FROM gym WHERE phone_num = '".$number."'" ;
$result=mysqli_query($conn, $sql);

$sql="SELECT id FROM gym WHERE phone_num = '".$number."'" ;
$result0=mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result0);



if($result) {
    $count = mysqli_num_rows($result) ;
    if ($count ==0) {
        echo "<script>alert('일치하는 회원 정보가 없습니다');location.replace('access.php');</script>";
    }
    else{
        $id = $row['id'];
        echo "<script>alert('".$id." 회원님 반갑습니다.');location.replace('access.php');</script>";
        
        $datetime = date("Y-m-d H:i:s");
        $sql="UPDATE gym SET last_visit = '".$datetime."' WHERE id='".$id."'";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo "<script>alert('시간 성공');</script>";
        }
        else{
            echo "<script>alert('시간 실패');</script>";
        }
    }
    
}
else {
    $err_msg=mysqli_error($conn);
    echo "<script>alert(\"SQL문 정보조회 오류 \\n오류내용: $err_msg\");</script>" ;
}

mysqli_close($conn);

?>
