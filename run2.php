<?php
error_reporting(0); 
date_default_timezone_set("Asia/Kolkata");
include'config.php';
include'function.php';
$runtime=date("H");
$fail=0;
$date= date('Y/m/d H:i'); 
//fetch data
$foraction = mysql_query("SELECT * FROM instagram where status='Active' limit 15");

$sleep = array('00','01','02','03','04','05','12','15','19','23');
       if (in_array($runtime, $sleep))
       {
       echo"Sleep time Night  12 to Morng 6<br>";
       }
       else
       {
        while($row = mysql_fetch_array($foraction)){
         $userid=$row[idig];$username=$row[username];$cookie=$row[cookie];$useragent=$row[useragent];$count=$row[tagcount];$logout=$row[logout];$faild=$row[faild];
         echo'<hr>';
        echo ' User: '.$row[username];
        echo'<hr>';

$uax= useragent();
$uax2=uamulti ();
$z4zam=0;
$limit=1;
$date= date('Y/m/d H:i'); 
               if($faild>=1)
               {
               mysql_query("UPDATE instagram set status='NotActive' where idig='".$userid."'");  
               }
//action
    
        else
        {
           $req = proccess(1, $uax, 'feed/timeline/',$cookie);
           $data = json_decode($req['1'],true);
  //die(json_encode($data));
           if(count($data[items]) > 0){
      $l = 1;
      for($i=0 ;$i<$l;$i++){
      $mediaid= $data[items][$i][id];
      $shortcode = $data[items][$i][code];
      $liked = $data[items][$i][has_liked];      
      if($liked == false)
     {
        $like = like($mediaid, $shortcode, $useragent, $cookie);
        
        if(preg_match('/{"status": "ok"}/', @$like)){
            $z4zam++;   
        $action='Liked';
        $status='Success';
        print '<br>-----|starting like '.$shortcode.'/'.$status.'/ <br>';
         mysql_query("INSERT INTO media (media_id, shortcode, uplink,status,date)
VALUES ('".$mediaid."', '".$shortcode."','".$username."','".$status."','".$date."')"); 
        if($z4zam >= $limit) break;
        mysql_query("UPDATE instagram set tagcount=tagcount+1  where idig='".$userid."'");

        
        }
        else
        {
         echo$fduser.'Like Faild';      
         $t = proccess(1, $uax, 'accounts/logout/',$cookie,hook($logout));
                  
              $t = json_decode($t[1]);
              //echo json_encode($t);
              if($t->status=='ok')
              {
              $status='Success';
              Echo' Logout Successful';
              mysql_query("UPDATE instagram set status='NotActive' where idig='".$userid."'");
              }
              else
              {
                  echo'Logout Fail..';
              }
         break;
        }
        
      }
        
  }
}}
}}
