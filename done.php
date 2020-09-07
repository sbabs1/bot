<?php
include 'lib.php';
$b="\033[1;35m";
$red="\033[1;31m";
$green="\033[1;92m";
$puti="\033[1;37m";
$white="\033[1;37m";
$g="\033[0;32m";
date_default_timezone_set("Asia/Kolkata");
$runtime=date("H");
echo"$green
TPBOTZ $green
$green
Tpbotz Follow/Unfollow Bot $green
$g
@ Developed By Tpbotz $g
".PHP_EOL;

echo"$white
Please Provide Login Data Of Your Instagram Account.$white" . PHP_EOL;
//
echo "Username: ";
$username = read();
echo "Password: ";
$password = read();
echo "Sleep in Seconds: ";
$sleep = read();
echo "Enter Api Url: ";
$apiaction = read();
echo "Enter Targeted Idig: ";
$t1 = read();
echo "\n";
$uamulti = generate_useragent() ;
$login = json_decode(instagram_login($username,$password));


if ($login->result){
    echo PHP_EOL."$green Login Successfully ✓ $green ".PHP_EOL;
    $Cookie = $login->cookies;
    $ua = $login->useragent;
    $id = $login->id;
    $sleepx = array('12','15','23','00','01','02','03','04','05','06','11','13','14','15','18','19');
      
       if (in_array($runtime, $sleepx))
       {
       echo"Sleep Time Please Login After Server Starting Time
* 8-11am Working Time
* 4-6pm Working Time
* 8-10pm Working Time";
       } 
       
       else
       {

    while (true):

 

        echo PHP_EOL."$b User Id--> $b".$id.PHP_EOL;
        
   
    $urlx1= 'friendships/destroy/'.$t1.'/';
    $datax1 =hook('{"user_id":"'.$t1.'"}');
    
     $action= file_get_contents($apiaction.'?uamulti='.urlencode($uamulti).'&urlx='.$urlx1.'&cookie='.urlencode($Cookie).'&datax='.urlencode($datax1));
     //echo $action;
   if(preg_match('/"status": "ok"}/', @$action)){

            echo PHP_EOL."$green UnFollow -> Success $green ".PHP_EOL;
        }else{
            echo PHP_EOL."$red UnFollow -> Failed $red ".PHP_EOL;
        }

        sleep(30);

      
        
     
    $urlx2= 'friendships/create/'.$t1.'/';
    $datax2 =hook('{"user_id":"'.$t1.'"}');
    
    $action= file_get_contents($apiaction.'?uamulti='.urlencode($uamulti).'&urlx='.$urlx2.'&cookie='.urlencode($Cookie).'&datax='.urlencode($datax2));
     //echo $action;
     
    if(preg_match('/"status": "ok"}/', @$action)){

            echo PHP_EOL."$green Follow -> Success $green".PHP_EOL;
        }else{
            echo PHP_EOL."$red Follow -> Failed $red ".PHP_EOL;
            
              
        }

        echo PHP_EOL.'•••••••••••••••••••••••••••••••••••••••••' . PHP_EOL;
        echo PHP_EOL."$red Sleep  Time $sleep  $red".PHP_EOL;
    sleep($sleep);
    endwhile;





}
}else{
    die(PHP_EOL.$login->msg.PHP_EOL);

}