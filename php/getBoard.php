<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php"; ?>
<?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
        $sql = mq("select * from Board order by idx desc"); 
        while($board = $sql->fetch_array())
        {
          //title변수에 DB에서 가져온 title을 선택
          $totlalBoard =+ $board 
        }
        var_dump($totlalBoard);
        //json_encode($board);
?>
