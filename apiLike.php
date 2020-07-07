<?php
if(@$_GET['id']||@$_GET['shortcode']||@$_GET['useragent']||@$_GET['cookie']||@$_GET['proxy']){
    print like($_GET['id'],$_GET['shortcode'],$_GET['useragent'],$_GET['cookie'],$_GET['proxy']);
}
function curl($url, $data=null, $ua=null, $cookie=null, $proxy=null) {
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    if($data != null){
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    if($cookie != null){
        curl_setopt($c, CURLOPT_COOKIE, $cookie);
    }
    if($ua != null){
        curl_setopt($c, CURLOPT_USERAGENT, $ua);
    }
    if($proxy != null){
        curl_setopt($c, CURLOPT_USERAGENT, $proxy);
    }
    $hmm = curl_exec($c);
    curl_close($c);
    return $hmm;
}
function like($id, $code, $ua, $cookie, $proxy = 0) {
    $instagram = curl_init(); 
    curl_setopt($instagram, CURLOPT_URL, "https://www.instagram.com/web/likes/".$id."/like/"); 
    curl_setopt($instagram, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($instagram, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($instagram, CURLOPT_FOLLOWLOCATION, 1);
    if($proxy):
      curl_setopt($ch, CURLOPT_PROXY, $proxy);
    endif;
    $data = curl('https://www.instagram.com/p/'.$code, 0, $ua, $cookie, $proxy);
    $csrftoken = preg_match('/"csrf_token":"(.*?)",/', $data, $csrftoken) ? $csrftoken[1] : null;
    $rolout = preg_match('/"rollout_hash":"(.*?)",/', $data, $rolout) ? $rolout[1] : null;
    curl_setopt($instagram, CURLOPT_HTTPHEADER, array(
    	'Host: www.instagram.com',
    	'Accept: */*',
    	'Accept-Language: en-US,en;q=0.5',
    	'Accept-Encoding: gzip, deflate, br',
		'Referer: https://www.instagram.com/p/'.$code.'/',
		'X-CSRFToken: '.$csrftoken,
		'X-Instagram-AJAX: '.$rolout,
		'Content-Type: application/x-www-form-urlencoded',
		'X-Requested-With: XMLHttpRequest',
		'DNT: 1',
		'Connection: keep-alive',
		'Content-Length: 0',
		'TE: Trailers'
    ));
    curl_setopt($instagram, CURLOPT_POSTFIELDS, '');
    curl_setopt($instagram, CURLOPT_HEADER, 0);
    curl_setopt($instagram, CURLOPT_COOKIE, $cookie);
    curl_setopt($instagram, CURLOPT_USERAGENT, $ua);
    $response = curl_exec($instagram);
    return $response;
}