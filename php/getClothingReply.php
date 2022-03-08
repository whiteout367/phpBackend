<?php include  $_SERVER['DOCUMENT_ROOT']."/phpBack/DB.php"; ?>

<?php
   $idx=$_GET['idx'];
 // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
   $sql = mq("select Idx,Id,Content,Date from ClothingReply order by idx desc"); 
     while($board = $sql->fetch_array())
     {
       //title변수에 DB에서 가져온 title을 선택
       $title=$board["title"]; 
       if(strlen($title)>30)
       { 
         //title이 30을 넘어서면 ...표시
         $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
       }
       $list[] =   $board;
      
    }
    
    echo json_encode($list,JSON_UNESCAPED_UNICODE);
?>