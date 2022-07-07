<?php

//gymDB 데이터베이스 연결
$conn=mysqli_connect("localhost", "gym_user", "1234", "gymDB") or die("gymDB 접속 실패 !!");

if(isset($_POST['id2']) && isset($_POST['phone_num2']) && isset($_POST['sex2']) &&
 isset($_POST['birth2'])){
        $id = $_POST["id2"];
        $phone_num = $_POST["phone_num2"];
        $sex = $_POST["sex2"];
        $birth = $_POST["birth2"];
        
}
$sql="UPDATE gym SET id = '".$id."', phone_num = '".$phone_num."', sex= '".$sex."', birth =
'".$birth."' WHERE id = '".$id."'";
$result=mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('".$id." 정보 수정 되었습니다');</script>";
}
else{
    $err_msg=mysqli_error($conn);
    echo "<script>alert(\"SQL문 정보수정 오류 \\n오류내용: $err_msg\");</script>";
}
mysqli_close($conn);
echo "<script>location.replace('main.php');</script>";

?>