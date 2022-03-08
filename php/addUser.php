<?php

include $_SERVER['DOCUMENT_ROOT']."/phpBack/DB.php";


$id= $_POST['id'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);


$sql = "insert into User(Id,Passwd) values($id,$userpw)";
$sql = mq($sql);
if ($sql === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
   
} else {
?>
    <!-- <script>
        alert("회원가입이 완료되었습니다");
        
    </script> -->
<?php
}
?>