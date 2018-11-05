<?php
$code=@$_GET['code'];

$appid='wx07e573ccb0254bba';

$secret='b68ed4d7dd03ac88c1bef8d96acc156e';

$api='https://api.weixin.qq.com/sns/jscode2session?appid={$appid}&secret={$secret}&js_code={$code}&grant_type=authorization_code';


	//获取get请求
	function httpGet($url){
		$curl=curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($curl, CURLOPT_TIMEOUT, 500);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, TRUE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, TRUE);
		curl_setopt($curl, CURLOPT_URL, $url);
		$res=curl_exec($curl);
		curl_close($curl);
		return $res;		
	}
	
	$str=httpGet($api);
	echo $str;

?>