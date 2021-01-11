<?php
require_once 'module/config.php';
header('Content-type: application/json; charset=utf8');

$headers = array(
    "Authorization: Bearer $tokenauthority",
    "Accept:application/json",
    "Content-Type:application/x-www-form-urlencoded"
);

$postfields = array(
  'name'  => $_POST['name'],
  'phone' => $_POST['phone'],
  'uid'   => $uid,
);

$curl = curl_init('https://drop1.top/api/orders');
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postfields));
$json = curl_exec($curl);
// curl_close($curl);

// Сбор логов
$res = json_decode($json,true);

$logDir = 'log/';
if(!is_dir($logDir)) mkdir($logDir) ;

if ($json === 0) {
        file_put_contents($logDir . 'orders.log', json_encode($postfields, JSON_UNESCAPED_UNICODE)."--error-ead-timeout\n", FILE_APPEND);
} else {
	$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	if ($httpCode === 200 or $httpCode === 201) {
	        file_put_contents($logDir . 'orders.log', json_encode($postfields, JSON_UNESCAPED_UNICODE)."\n", FILE_APPEND);
	} else if ($httpCode === 400 or $httpCode === 401 or $httpCode === 404 or $httpCode === 500 or $httpCode === 503) {
	        file_put_contents($logDir . 'orders.log', json_encode($postfields).'--error:'.$httpCode." \n", FILE_APPEND);
	} else {
	        file_put_contents($logDir . 'orders.log', json_encode($postfields, JSON_UNESCAPED_UNICODE)."--error_unknown\n", FILE_APPEND);
	}
}
// Сбор логов конец

header('Location: success.php?phone='.$_POST['phone'].'&uid='.$uid.'&name='.$_POST['name'].'&$fbpxid=');

