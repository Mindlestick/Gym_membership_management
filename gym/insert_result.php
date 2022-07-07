<?php

//movieDB 데이터베이스 연결
$conn=mysqli_connect("localhost", "gym_user", "1234", "gymDB") or die("gymDB 접속 실패 !!");

$id = $_POST["id1"];
$phone_num = $_POST["phone_num1"];
$sex = $_POST["sex1"];
$birth = $_POST["birth1"];


        $sql="INSERT INTO gym(id, phone_num, sex, birth)
              VALUES('".$id."','".$phone_num."','".$sex."','".$birth."');";     
        $result=mysqli_query($conn, $sql);
        
        if($result) {
            echo "<script>alert('".$id."회원님 가입 완료되었습니다');</script>"; 
        }
        else {
            $err_msg=mysqli_error($conn);
            echo "<script>alert(\"SQL문 회원가입 오류 \\n오류내용: $err_msg\");</script>" ;
        }                      

mysqli_close($conn);

echo '<script>location.replace("main.php");</script>'; 

?>
