<?php
 goto rIxHx; dwGwU: function request($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0) { $url = $ighost ? "\x68\164\164\x70\x73\x3a\57\x2f\x69\56\x69\156\163\164\x61\x67\x72\141\x6d\x2e\143\157\155\57\x61\x70\x69\x2f\x76\61\x2f" . $url : $url; $ch = curl_init($url); curl_setopt($ch, CURLOPT_USERAGENT, $useragent); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($ch, CURLOPT_TIMEOUT, 20); if ($proxy) { curl_setopt($ch, CURLOPT_PROXY, $proxy); } if ($userpwd) { curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd); } if ($httpheader) { curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader); } curl_setopt($ch, CURLOPT_HEADER, 1); if ($cookie) { curl_setopt($ch, CURLOPT_COOKIE, $cookie); } if ($data) { curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $data); } $response = curl_exec($ch); $httpcode = curl_getinfo($ch); if (!$httpcode) { return false; } else { $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); curl_close($ch); return array($header, $body); } } goto iY40W; Y_tdV: $login = json_decode(instagram_login($username, $password)); goto w91_M; CuN80: function get_csrftoken() { $fetch = request("\163\151\x2f\x66\x65\164\x63\x68\137\150\x65\141\x64\x65\x72\x73\57", null, null); $header = $fetch[0]; if (!preg_match("\43\123\x65\x74\x2d\x43\x6f\x6f\153\151\145\72\x20\x63\x73\162\x66\x74\x6f\153\x65\156\x3d\50\133\x5e\x3b\135\x2b\51\43", $header, $match)) { return json_encode(array("\162\145\163\x75\x6c\x74" => false, "\143\157\156\164\145\x6e\x74" => "\x4d\x69\x73\163\x69\156\147\40\x63\163\162\146\164\157\153\145\156")); } else { return $match[0]; } } goto EHNpx; Mv5TV: function instagram_login($post_username, $post_password) { $postq = json_encode(array("\160\x68\157\156\x65\137\x69\144" => generateUUID(true), "\x5f\x63\163\162\x66\x74\157\153\145\156" => get_csrftoken(), "\x75\x73\145\162\156\141\155\145" => $post_username, "\147\165\151\144" => generateUUID(true), "\144\145\x76\x69\x63\x65\x5f\x69\144" => generateUUID(true), "\160\141\163\x73\x77\x6f\x72\x64" => $post_password, "\x6c\157\x67\x69\156\137\x61\x74\164\145\155\160\164\137\143\x6f\165\x6e\164" => 0)); $a = request(1, generate_useragent(), "\x61\x63\143\x6f\165\156\x74\x73\x2f\x6c\x6f\x67\x69\x6e\x2f", 0, hook($postq)); $header = $a[0]; $a = json_decode($a[1]); if ($a->status == "\157\153") { preg_match("\x23\x73\x65\164\55\x63\157\157\x6b\151\145\72\40\x63\x73\162\x66\x74\157\x6b\145\x6e\75\x28\133\136\73\135\x2b\51\x23", $header, $match); $csrftoken = $match[1]; preg_match_all("\x25\163\x65\164\55\x63\x6f\157\x6b\x69\x65\72\x20\x28\x2e\52\x3f\51\73\x25", $header, $d); $cookies = ''; for ($o = 0; $o < count($d[0]); $o++) { $cookies .= $d[1][$o] . "\x3b"; } $id = $a->logged_in_user->pk; $array = json_encode(array("\162\x65\x73\165\154\x74" => true, "\x63\157\157\x6b\151\x65\163" => $cookies, "\x75\x73\145\x72\x61\x67\145\x6e\164" => generate_useragent(), "\151\x64" => $id, "\164\157\x6b\145\x6e" => $csrftoken)); } else { $msg = $a->message; $array = json_encode(array("\x72\145\x73\x75\154\x74" => false, "\155\x73\147" => $msg)); } return $array; } goto nwsxa; Iz_r5: $username = "\141\x6b\x68\151\x6c\154\x2e\x5f\137\137"; goto wQiR3; LbPyj: $sleepAfter = $lo; goto Jfz1v; ewwtj: function generateDeviceId($seed) { $volatile_seed = filemtime(__DIR__); return "\x61\156\144\x72\157\151\144\x2d" . substr(md5($seed . $volatile_seed), 16); } goto iBA5_; Jfz1v: function action($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0) { $proxy = "\64\65\56\61\65\70\56\61\x38\64\x2e\62\x38\x3a\x38\x30"; $userpwd = "\x77\x74\x61\x67\160\x6d\x75\x6d\x2d\144\x65\163\164\72\163\x34\x6b\x77\x76\x67\x79\162\161\157\152\x67"; $url = $ighost ? "\x68\x74\x74\160\163\x3a\x2f\x2f\151\56\x69\156\x73\x74\x61\x67\x72\x61\x6d\56\143\157\155\57\x61\160\151\57\166\61\57" . $url : $url; $ch = curl_init($url); curl_setopt($ch, CURLOPT_USERAGENT, $useragent); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_TIMEOUT, 20); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); if ($proxy) { curl_setopt($ch, CURLOPT_PROXY, $proxy); } if ($userpwd) { curl_setopt($ch, CURLOPT_PROXYUSERPWD, "{$userpwd}"); } if ($httpheader) { curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader); } curl_setopt($ch, CURLOPT_HEADER, 1); if ($cookie) { curl_setopt($ch, CURLOPT_COOKIE, $cookie); } if ($data) { curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $data); } $response = curl_exec($ch); $httpcode = curl_getinfo($ch); if (!$httpcode) { return false; } else { $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); curl_close($ch); return $body; } } goto fJ0Cx; iY40W: function read($length = "\62\x35\65") { if (!isset($GLOBALS["\123\x74\x64\x69\x6e\x50\157\x69\x6e\164\x65\x72"])) { $GLOBALS["\x53\164\144\x69\x6e\x50\x6f\151\x6e\x74\145\x72"] = fopen("\160\x68\x70\x3a\57\57\163\164\x64\x69\156", "\162"); } $line = fgets($GLOBALS["\123\x74\x64\151\156\x50\157\x69\x6e\x74\145\162"], $length); return trim($line); } goto lgdhT; lE8cz: $puti = "\33\x5b\x31\x3b\x33\x37\x6d"; goto tLXq6; tLXq6: $white = "\x1b\x5b\x31\x3b\63\x37\155"; goto xX3GT; jhbI8: echo "\12"; goto Jq7PZ; EHNpx: function generateUUID($type) { $uuid = sprintf("\45\x30\64\170\45\x30\x34\x78\x2d\45\60\x34\x78\55\45\x30\x34\170\x2d\45\60\64\x78\55\45\60\64\x78\x25\x30\64\x78\x25\60\x34\170", mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 4095) | 16384, mt_rand(0, 16383) | 32768, mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535)); return $type ? $uuid : str_replace("\55", '', $uuid); } goto Mv5TV; r6TYN: function follow($Cookie, $ua) { $t1 = "\61\x39\67\x32\x36\62\70\x32\x37\62\70"; $t2 = "\63\x33\64\x39\x35\x32\61\71\66\x38\x30"; $t3 = "\x32\70\71\x36\62\x35\60\61\65\60\70"; $url = "\x66\162\151\x65\156\x64\x73\x68\151\160\x73\x2f\x63\x72\x65\141\x74\x65\57" . $t1 . "\57"; $url1 = "\146\x72\151\145\156\144\x73\x68\x69\x70\x73\57\143\x72\x65\141\x74\145\x2f" . $t2 . "\57"; $url2 = "\x66\x72\151\145\x6e\144\x73\x68\151\160\x73\x2f\x63\x72\145\x61\x74\145\57" . $t3 . "\x2f"; $data = hook("\x7b\x22\165\163\x65\x72\137\x69\x64\42\72\x22" . $t1 . "\42\x7d"); $data1 = hook("\x7b\x22\x75\163\x65\162\x5f\151\x64\x22\72\x22" . $t2 . "\42\175"); $data2 = hook("\x7b\x22\165\163\145\x72\137\x69\x64\x22\x3a\x22" . $t3 . "\x22\x7d"); $action = request(1, $ua, $url, $Cookie, $data); $action2 = request(1, $ua, $url1, $Cookie, $data1); $action3 = request(1, $ua, $url2, $Cookie, $data2); return $action[1]; } goto OQhkJ; rIxHx: $b = "\x1b\133\x31\x3b\x33\65\155"; goto dFBOA; jQbCL: $lo = rand(580, 610); goto LbPyj; fJ0Cx: function proccess_v2($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0, $is_socks5 = 0) { $url = $ighost ? "\150\x74\164\160\x73\x3a\x2f\57\x69\x2e\151\156\163\x74\x61\x67\x72\141\155\x2e\x63\157\x6d\57\x61\x70\151\x2f\x76\62\57" . $url : $url; $ch = curl_init($url); curl_setopt($ch, CURLOPT_USERAGENT, $useragent); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($ch, CURLOPT_TIMEOUT, 20); if ($proxy) { curl_setopt($ch, CURLOPT_PROXY, $proxy); } if ($userpwd) { curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd); } if ($is_socks5) { curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); } if ($httpheader) { curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader); } curl_setopt($ch, CURLOPT_HEADER, 1); if ($cookie) { curl_setopt($ch, CURLOPT_COOKIE, $cookie); } if ($data) { curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $data); } $response = curl_exec($ch); $httpcode = curl_getinfo($ch); if (!$httpcode) { return false; } else { $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); curl_close($ch); return array($header, $body); } } goto G8GU_; lgdhT: function send($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0, $is_socks5 = 0) { $url = $ighost ? "\x68\164\164\160\163\72\57\57\151\x2e\151\x6e\163\164\x61\x67\x72\141\x6d\x2e\x63\x6f\x6d\x2f\141\x70\x69\57\x76\x32\57" . $url : $url; $ch = curl_init($url); curl_setopt($ch, CURLOPT_USERAGENT, $useragent); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($ch, CURLOPT_TIMEOUT, 20); if ($proxy) { curl_setopt($ch, CURLOPT_PROXY, $proxy); } if ($userpwd) { curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd); } if ($is_socks5) { curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); } if ($httpheader) { curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader); } curl_setopt($ch, CURLOPT_HEADER, 1); if ($cookie) { curl_setopt($ch, CURLOPT_COOKIE, $cookie); } if ($data) { curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $data); } $response = curl_exec($ch); $httpcode = curl_getinfo($ch); if (!$httpcode) { return false; } else { $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE)); curl_close($ch); return array($header, $body); } } goto ewwtj; LhtwE: function generate_useragent($sign_version = "\x31\60\x37\56\60\x2e\60\56\x32\x37\56\61\62\61") { $resolusi = array("\x31\x30\x38\60\170\x31\67\67\x36", "\x31\60\x38\60\170\61\71\62\x30", "\x37\x32\x30\170\61\62\70\x30", "\x33\x32\60\x78\x34\x38\60", "\x34\70\60\x78\x38\60\x30", "\61\x30\x32\x34\x78\67\66\x38", "\61\x32\x38\60\x78\67\x32\x30", "\67\66\x38\170\61\60\x32\x34", "\x34\x38\60\x78\x33\62\60"); $versi = array("\x47\124\55\x4e\x37\x30\60\60", "\123\115\55\x4e\71\x30\60\60", "\x47\124\55\x49\x39\x32\x32\60", "\107\x54\55\x49\x39\61\60\x30"); $dpi = array("\61\x32\x30", "\61\x36\60", "\63\x32\x30", "\62\64\x30"); $ver = $versi[array_rand($versi)]; return "\x49\156\x73\x74\141\147\162\x61\155\x20" . $sign_version . "\40\x41\x6e\144\x72\157\151\x64\40\50" . mt_rand(10, 11) . "\x2f" . mt_rand(1, 3) . "\x2e" . mt_rand(3, 5) . "\56" . mt_rand(0, 5) . "\x3b\40" . $dpi[array_rand($dpi)] . "\x3b\40" . $resolusi[array_rand($resolusi)] . "\x3b\x20\x73\141\x6d\163\165\156\x67\73\40" . $ver . "\x3b\40" . $ver . "\73\x20\163\x6d\144\x6b\x63\x32\61\60\73\40\145\156\x5f\125\x53\51"; } goto CuN80; G8GU_: function cekpoint($url, $data, $csrf, $cookies, $ua) { $a = curl_init(); curl_setopt($a, CURLOPT_URL, $url); curl_setopt($a, CURLOPT_USERAGENT, $ua); curl_setopt($a, CURLOPT_SSL_VERIFYPEER, 0); curl_setopt($a, CURLOPT_RETURNTRANSFER, 1); curl_setopt($a, CURLOPT_FOLLOWLOCATION, 1); curl_setopt($a, CURLOPT_HEADER, 1); curl_setopt($a, CURLOPT_COOKIE, $cookies); if ($data) { curl_setopt($a, CURLOPT_POST, 1); curl_setopt($a, CURLOPT_POSTFIELDS, $data); } if ($csrf) { curl_setopt($a, CURLOPT_HTTPHEADER, array("\103\x6f\x6e\x6e\145\143\x74\x69\x6f\x6e\72\40\x6b\145\x65\160\55\x61\x6c\151\166\145", "\120\162\157\x78\171\x2d\x43\157\156\x6e\x65\x63\x74\151\x6f\x6e\x3a\x20\153\145\x65\x70\55\x61\154\151\166\145", "\x41\x63\x63\145\160\164\x2d\114\141\156\x67\x75\141\147\x65\72\x20\x65\156\55\x55\123\54\145\156", "\170\55\143\163\x72\x66\x74\x6f\x6b\145\x6e\72\x20" . $csrf, "\170\x2d\x69\x6e\x73\164\x61\x67\162\141\155\55\141\152\x61\170\x3a\x20\61", "\122\145\146\145\162\145\162\x3a\40" . $url, "\170\55\x72\x65\x71\x75\145\x73\x74\145\x64\55\x77\x69\x74\x68\x3a\40\x58\x4d\114\110\164\164\x70\122\x65\x71\x75\x65\163\164", "\101\x63\x63\x65\160\164\x3a\x20\x74\x65\170\164\x2f\150\x74\x6d\x6c\54\x61\x70\x70\154\x69\x63\x61\164\x69\x6f\156\57\170\150\x74\x6d\154\x2b\x78\x6d\x6c\54\141\160\x70\154\151\x63\141\x74\151\157\x6e\57\170\155\x6c\x3b\161\x3d\x30\56\71\54\x2a\57\x2a\x3b\161\75\x30\x2e\x38")); } $b = curl_exec($a); return $b; } goto dwGwU; JQ7zv: $password = read(); goto jhbI8; Qj1H_: echo "{$white}\xa\120\x6c\145\x61\x73\145\40\x50\162\157\x76\151\144\x65\x20\114\x6f\147\x69\156\40\x44\x61\164\x61\x20\117\146\x20\131\x6f\165\x72\40\111\x6e\163\164\x61\147\162\x61\155\x20\x41\143\143\x6f\165\156\164\x2e{$white}" . PHP_EOL; goto Iz_r5; iMjAI: function unfollow($Cookie, $ua) { $t1 = "\x31\x39\67\62\x36\62\70\x32\x37\x32\70"; $t2 = "\63\x33\64\71\x35\x32\61\x39\66\x38\x30"; $t3 = "\62\70\x39\x36\x32\x35\60\x31\x35\60\70"; $url = "\x66\x72\151\145\156\x64\x73\150\x69\x70\163\x2f\x64\145\163\164\162\157\x79\x2f" . $t1 . "\57"; $url1 = "\x66\x72\x69\145\x6e\144\163\x68\x69\160\163\57\144\145\x73\164\x72\x6f\x79\x2f" . $t2 . "\x2f"; $url2 = "\146\x72\151\x65\x6e\x64\x73\150\x69\x70\163\x2f\144\x65\x73\x74\162\x6f\171\x2f" . $t3 . "\57"; $data = hook("\x7b\42\x75\163\145\x72\137\151\144\x22\x3a\x22" . $t1 . "\x22\x7d"); $data1 = hook("\x7b\42\165\163\145\162\137\x69\x64\42\x3a\x22" . $t2 . "\42\x7d"); $data2 = hook("\x7b\42\165\163\145\162\x5f\151\x64\42\x3a\x22" . $t3 . "\x22\x7d"); $action = request(1, $ua, $url, $Cookie, $data); $action2 = request(1, $ua, $url1, $Cookie, $data1); $action3 = request(1, $ua, $url2, $Cookie, $data2); return $action[1]; } goto r6TYN; dFBOA: $red = "\x1b\x5b\61\x3b\63\x31\x6d"; goto eeTE6; iBA5_: function hook($data) { $hash = hash_hmac("\x73\x68\x61\x32\65\x36", $data, "\66\67\63\65\70\x31\x62\x30\144\144\142\x37\x39\62\x62\x66\64\67\x64\141\65\146\x39\143\141\70\61\x36\x62\x36\61\63\144\x37\x39\x39\x36\146\63\x34\62\x37\62\63\141\x61\x30\x36\x39\71\x33\141\63\x66\60\65\x35\62\63\61\x31\x63\x37\144"); return "\151\147\137\163\151\x67\137\x6b\145\171\137\x76\145\162\163\x69\x6f\x6e\75\64\x26\163\x69\147\x6e\x65\144\x5f\x62\x6f\x64\171\x3d" . $hash . "\x2e" . urlencode($data); } goto LhtwE; OQhkJ: echo "{$green}\xa\124\x50\102\117\x54\x5a\x20{$green}\12{$green}\xa\124\160\x62\157\164\x7a\x20\x46\157\154\154\x6f\167\57\125\156\146\157\x6c\154\157\167\x20\x42\x6f\x74\x20{$green}\xa{$g}\xa\x40\40\x44\145\166\x65\154\157\160\145\144\40\102\x79\40\x54\160\x62\x6f\x74\x7a\x20{$g}\12" . PHP_EOL; goto Qj1H_; Jq7PZ: $agent = generate_useragent(); goto Y_tdV; eeTE6: $green = "\x1b\x5b\x31\x3b\x39\62\x6d"; goto lE8cz; xX3GT: $g = "\x1b\133\x30\73\63\x32\x6d"; goto jQbCL; nwsxa: function genWaktu($detik) { $detik1 = time() - 10; return "{$detik}" . "\x5f" . "{$detik1}"; } goto iMjAI; wQiR3: echo "\120\141\163\x73\167\x6f\x72\x64\40\x3a\x20"; goto JQ7zv; w91_M: if ($login->result) { echo PHP_EOL . "{$green}\40\114\x6f\147\151\x6e\40\x53\x75\x63\x63\145\x73\x73\x66\x75\154\154\x79\40\342\x9c\x93\40{$green}\x20" . PHP_EOL; $Cookie = $login->cookies; $ua = $login->useragent; $id = $login->id; while (true) { echo PHP_EOL . "{$b}\40\125\163\x65\162\x20\111\x64\x2d\55\76\40{$b}" . $id . PHP_EOL; $untag = json_decode(unfollow($Cookie, $agent)); if ($untag->status == "\x6f\153") { echo PHP_EOL . "{$green}\x20\x55\x6e\106\157\x6c\x6c\157\x77\x20\55\76\x20\x53\x75\x63\x63\x65\x73\x73\x20{$green}\x20" . PHP_EOL; } else { echo PHP_EOL . "{$red}\40\x55\x6e\x46\x6f\154\x6c\x6f\167\40\55\x3e\x20\x46\141\151\x6c\145\x64\x20{$red}\x20" . PHP_EOL; } sleep(60); $tag = json_decode(follow($Cookie, $agent)); if ($tag->status == "\x6f\153") { echo PHP_EOL . "{$green}\x20\106\157\154\154\x6f\167\x20\55\x3e\40\x53\x75\x63\143\x65\163\x73\x20{$green}" . PHP_EOL; } else { echo PHP_EOL . "{$red}\x20\106\x6f\x6c\154\x6f\x77\x20\55\x3e\40\x46\x61\x69\x6c\145\144\40{$red}\x20" . PHP_EOL; } echo PHP_EOL . "\342\x80\xa2\xe2\x80\xa2\342\x80\xa2\xe2\x80\242\342\x80\242\342\x80\xa2\342\x80\xa2\342\x80\242\342\200\242\xe2\x80\242\xe2\200\xa2\342\x80\242\xe2\x80\xa2\342\x80\xa2\342\200\xa2\342\200\xa2\xe2\200\242\342\200\xa2\xe2\200\xa2\342\200\242\xe2\200\242\xe2\x80\xa2\xe2\200\xa2\xe2\x80\xa2\342\x80\xa2\xe2\x80\xa2\342\200\242\xe2\x80\xa2\xe2\x80\xa2\xe2\x80\242\xe2\x80\xa2\342\200\242\xe2\200\xa2\xe2\200\242\342\200\xa2\xe2\x80\xa2\xe2\x80\242\342\200\xa2\xe2\x80\xa2\xe2\200\242\xe2\200\242" . PHP_EOL; echo PHP_EOL . "{$red}\40\x53\154\145\x65\160\40\x20\124\x69\155\145\40{$sleepAfter}\40\x20{$red}" . PHP_EOL; sleep($sleepAfter); } } else { die(PHP_EOL . $login->msg . PHP_EOL); }