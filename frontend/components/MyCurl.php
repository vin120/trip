<?php
namespace frontend\components;
use Yii;

class MyCurl
{
	//curl 发送请求
	public static function vcurl($url, $post = '', $cookie = '', $cookiejar = '', $referer = '')
	{
		$tmpInfo = '';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		 
		if($referer) {
			curl_setopt($curl, CURLOPT_REFERER, $referer);
		} else {
			curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
		}
		if($post) {
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
		}
		if($cookie) {
			curl_setopt($curl, CURLOPT_COOKIE, $cookie);
		}
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$tmpInfo = curl_exec($curl);
		if (curl_errno($curl)) {
			echo '<pre><b>错误:</b><br />'.curl_error($curl);
		}
		curl_close($curl);
		return $tmpInfo;
	}
	
	
	//发送短信
	public static function sentMessage($command,$cpid,$cppwd,$da,$dc=15,$sm)
	{
		//$command 	操作命令 ：MT_REQUEST：短信  , VO_REQUEST：语音 	必须
		//$cpid 	用户帐号ID	必须
		//$cppwd 	用户帐号密码	必须
		//$da 		目标号码，MSISDN， 如中国大陆：8613800000000 ,支持多号码批量提交，多个号码之间用半角逗号分隔，最多100个	必须
		//$sa 		自定义发送者号码	可选	
		//$dc		消息内容编码，默认15,GBK编码 ,15: GBK,8: Unicode,0: ISO8859-1	必须
		//$sm		消息内容，经编码后的字符串	必须
		//返回响应:	成功：mtmsgid=21426847850888196661& mtstat =ACCEPTD & mterrcode=000  	失败：mtmsgid=21426847850888196661& mtstat=REJECTD& mterrcode=错误代码
		
		$url = Yii::$app->params['message_url']."?command=".$command."&cpid=".$cpid."&cppwd=".$cppwd."&da=".$da."&dc=".$dc."&sm=".$sm;
		MyCurl::vcurl($url);
	}
	
		
	
	
	//获取用户ip
	public static function getIp() {
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) $ip = getenv("HTTP_CLIENT_IP");
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) $ip = getenv("HTTP_X_FORWARDED_FOR");
		else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) $ip = getenv("REMOTE_ADDR");
		else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) $ip = $_SERVER['REMOTE_ADDR'];
		else $ip = "unknown";
		return ($ip);
	}
	
	
}