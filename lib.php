<?php
function action($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0){
		//The IP address of the proxy you want to send
        //your request through.
     $proxy = '45.158.184.28:80';
    $userpwd = 'wtagpmum-dest:s4kwvgyrqojg'; 
    
    $url = $ighost ? 'https://i.instagram.com/api/v1/' . $url : $url;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
    //Set the proxy IP.
    if($proxy) curl_setopt($ch, CURLOPT_PROXY, $proxy);
    //Specify the username and password.
    if($userpwd) curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$userpwd");
    if($httpheader) curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    if($cookie) curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    if ($data):
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    endif;
     $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if(!$httpcode) return false; else{
      $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
      $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
      curl_close($ch);
      return $body;
    }
  }
function uamulti($sign_version = '122.0.0.29.238'){
 	$resolusi = array('1080x1776','1080x1920','720x1280', '320x480', '480x800', '1024x768', '1280x720', '768x1024', '480x320');
		$versi = array('GT-N7000', 'SM-N9000', 'GT-I9220', 'GT-I9100');		$dpi = array('120', '160', '320', '240');
		$ver = $versi[array_rand($versi)];
		return 'Instagram '.$sign_version.' Android ('.mt_rand(10,11).'/'.mt_rand(1,3).'.'.mt_rand(3,5).'.'.mt_rand(0,5).'; '.$dpi[array_rand($dpi)].'; '.$resolusi[array_rand($resolusi)].'; samsung; '.$ver.'; '.$ver.'; smdkc210; pt_BR)';
		} 

function proccess_v2($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0, $is_socks5 = 0)
{
    $url = $ighost ? 'https://i.instagram.com/api/v2/' . $url : $url;
    $ch  = curl_init($url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    if ($proxy)
        curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if ($userpwd)
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
    if ($is_socks5)
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    if ($httpheader)
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    if ($cookie)
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    if ($data):
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    endif;
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        curl_close($ch);
        return array(
            $header,
            $body
        );
    }
}


function cekpoint($url, $data, $csrf, $cookies, $ua){
	$a = curl_init();
    curl_setopt($a, CURLOPT_URL, $url);
    curl_setopt($a, CURLOPT_USERAGENT, $ua);
	curl_setopt($a, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($a, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($a, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($a, CURLOPT_HEADER, 1);
    curl_setopt($a, CURLOPT_COOKIE, $cookies);
    if($data){
    curl_setopt($a, CURLOPT_POST, 1);	
    curl_setopt($a, CURLOPT_POSTFIELDS, $data);
    }
    if($csrf){
    curl_setopt($a, CURLOPT_HTTPHEADER, array(
            'Connection: keep-alive',
            'Proxy-Connection: keep-alive',
            'Accept-Language: en-US,en',
            'x-csrftoken: '.$csrf,
            'x-instagram-ajax: 1',
            'Referer: '.$url,
            'x-requested-with: XMLHttpRequest',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
    ));
    }
    $b = curl_exec($a);
    return $b;
}
function request($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0){
    
    $url = $ighost ? 'https://i.instagram.com/api/v1/' . $url : $url;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    if($proxy) curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if($userpwd) curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
    if($httpheader) curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    if($cookie) curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    if ($data):
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    endif;
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if(!$httpcode) return false; else{
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        curl_close($ch);
        return array($header, $body);
    }
}


function read ($length='255')
{
    if (!isset ($GLOBALS['StdinPointer']))
    {
        $GLOBALS['StdinPointer'] = fopen ("php://stdin","r");
    }
    $line = fgets ($GLOBALS['StdinPointer'],$length);
    return trim ($line);
}


function send($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0, $is_socks5 = 0){
    $url = $ighost ? 'https://i.instagram.com/api/v2/' . $url : $url;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    if($proxy) curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if($userpwd) curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
    if($is_socks5) curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    if($httpheader) curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    if($cookie) curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    if ($data):
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    endif;
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch);
    if(!$httpcode) return false; else{
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        curl_close($ch);
        return array($header, $body);
    }
}
function generateDeviceId($seed){
    $volatile_seed = filemtime(__DIR__);
    return 'android-'.substr(md5($seed.$volatile_seed), 16);
}
function hook($data){
    $hash = hash_hmac('sha256', $data, '673581b0ddb792bf47da5f9ca816b613d7996f342723aa06993a3f0552311c7d');
    return 'ig_sig_key_version=4&signed_body='.$hash.'.'.urlencode($data);
}
function generate_useragent($sign_version = '107.0.0.27.121'){
    $resolusi = array('1080x1776','1080x1920','720x1280', '320x480', '480x800', '1024x768', '1280x720', '768x1024', '480x320');
    $versi = array('GT-N7000', 'SM-N9000', 'GT-I9220', 'GT-I9100');
    $dpi = array('120', '160', '320', '240');
    $ver = $versi[array_rand($versi)];
    return 'Instagram '.$sign_version.' Android ('.mt_rand(10,11).'/'.mt_rand(1,3).'.'.mt_rand(3,5).'.'.mt_rand(0,5).'; '.$dpi[array_rand($dpi)].'; '.$resolusi[array_rand($resolusi)].'; samsung; '.$ver.'; '.$ver.'; smdkc210; en_US)';
}
function get_csrftoken(){
    $fetch = request('si/fetch_headers/', null, null);
    $header = $fetch[0];
    if (!preg_match('#Set-Cookie: csrftoken=([^;]+)#', $header, $match)) {
        return json_encode(array('result' => false, 'content' => 'Missing csrftoken'));
    } else {
        return $match[0];
    }
}
function generateUUID($type){
    $uuid = sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );

    return $type ? $uuid : str_replace('-', '', $uuid);
}
function instagram_login($post_username, $post_password){
    $postq = json_encode([
        'phone_id' => generateUUID(true),
        '_csrftoken' => get_csrftoken(),
        'username' => $post_username,
        'guid' => generateUUID(true),
        'device_id' => generateUUID(true),
        'password' => $post_password,
        'login_attempt_count' => 0
    ]);
    $a = request(1, generate_useragent(), 'accounts/login/', 0, hook($postq));
    $header = $a[0];
    $a = json_decode($a[1]);
    if($a->status == 'ok'){
        preg_match('#set-cookie: csrftoken=([^;]+)#', $header, $match);
        $csrftoken = $match[1];
        preg_match_all('%set-cookie: (.*?);%',$header,$d);$cookies = '';
        for($o=0;$o<count($d[0]);$o++)$cookies.=$d[1][$o].";";
        $id = $a->logged_in_user->pk;
        $array = json_encode(['result' => true, 'cookies' => $cookies, 'useragent' => generate_useragent(), 'id' => $id, 'token' => $csrftoken]);
    } else {
        $msg = $a->message;
        $array = json_encode(['result' => false, 'msg' => $msg]);
    }
    return $array;
}
function genWaktu($detik){
    $detik1 = time()-10;
    return "$detik"."_"."$detik1";
}
?>