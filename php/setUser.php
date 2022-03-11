<?php
error_reporting( E_ALL ); 
ini_set( "display_errors", 1 ); 
?>
<?php

include $_SERVER['DOCUMENT_ROOT']."/phpBack/DB.php";


$id= $_POST['id'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);


//DB에서 id와 pass를 문자열로 설정하여 ''를 넣어주어야 쿼리 작동
$sql = "insert into User(Id,Passwd) values('$id','$userpw')";
$sql = mq($sql);
if ($sql === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
   
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        
    </script>
<?php
}
?>