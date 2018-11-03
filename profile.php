<?php
class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "nFJejpIg7ijcj6JqFENZXoiGkpfPwPmrZkDtukb00yitblMnEWgAY80jKzNNPUGATMbsRtoavduuKbKXJMtFRtKDD/eu64PFjcoLJsbGnSFuenNIZkSD6mPX1H940+lUD4AbCMeBCkwEbr8NnU/1PQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "
db5a52cc0a1277884b3702883fb29f17

";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
