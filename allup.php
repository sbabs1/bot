<?php
include '../config.php';
require_once('../home/page/lib/lib.php');
date_default_timezone_set("Asia/Jakarta");

 $ip = getIp();
 $date = date('Y/m/d H:i');
 $ua = useragent();
 $query = 'null';
 $picture  = 'null';
 $text = array('Info .. ['.date('Y/m/d').'] Login Success! Bot Like Instagram is On! - Bot http://www. indotagram .com','Info .. ['.date('Y/m/d').'] Login Checkpoint! Please Login Again! - Bot http://www. indotagram .com');
 $stmtt = $conn->prepare("SELECT * FROM ngrok WHERE status='On'");
 $stmtt->execute(); 
 $row = $stmtt->fetch(PDO::FETCH_ASSOC);

if($row){
/* Login via localhost (ngrok) */
  		$stmtuser = $conn->prepare("SELECT * FROM instagram WHERE username='$adminig'");
  		$stmtuser->execute();
  		$user = $stmtuser->fetch(PDO::FETCH_ASSOC);

 $apiLogin = $row['url'];
 $postq = file_get_contents($apiLogin);
  if(preg_match('/ready/', $postq)){
$stmto = $conn->prepare("SELECT * FROM instagram");
$stmto->setFetchMode(PDO:: FETCH_ASSOC);
$stmto->execute();
while ($rowu=$stmto->fetch()) {
$idig = $rowu['idig'];
$username = $rowu['username'];
$password = $rowu['password'];
 $data = curl('https://www.instagram.com/'.$username);
 $data = preg_match('/window._sharedData = (.*?);<\/script>/', $data, $dielz) ? $dielz[1] : null;
	$data = json_decode($data);
	$postid = $data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges[0]->node->id;
	$postcode = $data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges[0]->node->shortcode; 

print '<br>'.$username;
   $post = file_get_contents($apiLogin.'?username='.$username.'&password='.$password);
   $json = json_decode($post);
    if($json->status == 'ok'){
  			$id = $json->id;
    	$name = $json->name;
  			$username = $json->username;
    	$following = $json->following;
    	$followers = $json->followers;
    	$biography = base64_encode($json->biography);
  			$picture = $json->picture;
  			$limit_like = $limit_like;
  			$useragent = $ua;
  			$cookie = $json->cookie;
  			$query = $query;
  			$status = 'Active';
  			$botlike = 'On';
  			$blocklike = 'No';
  			$premium = 'No';
  			$date = $date;
  			$ip = $ip;
  		$stmt = $conn->prepare('SELECT * FROM instagram WHERE idig=?');
  		$stmt->bindParam(1, $id, PDO::PARAM_INT);
  		$stmt->execute();
  		$row = $stmt->fetch(PDO::FETCH_ASSOC);
  		if(!$row){ 
  			$stmt = $conn->prepare("INSERT INTO instagram (idig, name, username, password, following, followers, biography, picture, limit_like, useragent, cookie, query, status, botlike, blocklike, premium, lastlogin, ip) VALUES (:idig, :name, :username, :password, :following, :followers, :biography, :picture, :limit_like, :useragent, :cookie, :query, :status, :botlike, :blocklike, :premium, :lastlogin, :ip)");
  			$stmt->bindParam(':idig', $id);
    	$stmt->bindParam(':name', $name);
  			$stmt->bindParam(':username', $username);
  			$stmt->bindParam(':password', $password);
    	$stmt->bindParam(':following', $following);
    	$stmt->bindParam(':followers', $followers);
    	$stmt->bindParam(':biography', $biography);
  			$stmt->bindParam(':picture', $picture);
  			$stmt->bindParam(':limit_like', $limit_like);
  			$stmt->bindParam(':useragent', $useragent);
  			$stmt->bindParam(':cookie', $cookie);
  			$stmt->bindParam(':query', $query);
  			$stmt->bindParam(':status', $status);
  			$stmt->bindParam(':botlike', $botlike);
  			$stmt->bindParam(':blocklike', $blocklike);
  			$stmt->bindParam(':premium', $premium);
  			$stmt->bindParam(':lastlogin', $date);
  			$stmt->bindParam(':ip', $ip);
  			$stmt->execute();
  		}else{
  			$stmt = $conn->prepare("UPDATE instagram SET name='$name', username='$username', password='$password', following='$following', followers='$followers', biography='$biography', picture='$picture', cookie='$cookie', query='$query', useragent='$ua', status='$status', botlike='$botlike', blocklike='$blocklike', lastlogin='$date', ip='$ip' WHERE idig='$id'");
  			$stmt->execute();
    }
    
    komen($posid, $postcode, $lua, $lcookie, $text[0]);
     print' sukses';
  } else if(preg_match('/Username dan password yang anda masukan salah/',$json->message)) {
  $stmtdy = $conn->prepare("DELETE FROM instagram WHERE idig='$idig'");
  $stmtdy->execute();
  print' password salah';
  } else if(preg_match('/checkpoint/',$json->message)){
  komen($posid, $postcode, $lua, $lcookie, $text[1]);
  print' checkpoint';
  } else {
  print ' '.$json->message;
  }
 }
 flush();
 } else {
print' ngrok off';
}
}
$cronn = null;