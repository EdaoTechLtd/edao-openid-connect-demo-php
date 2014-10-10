<?php

class EdaoOIDConfig {
	// 客户代码名
	private $ClientName = "EdaoStd";
	// 应用证书
	private $Credentials = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCANELcdE0uzTQ431SkuyN4RCQ0z0TCecSUhXQ0sOy9FITTnlzUs8Uja8K0dKp3Exxfegxf5USDtn1RA/22hMwYJ+3ovxHw5jxaQ0Vp8dXBTh08bCFXhvyHfjDC/8B4KAGkSkCyR3f4meFXQefa2GWTxqnf8LMJCnZTrGIFkwaB/wIDAQAB";
	// 回调地址
	private $CallbackUrl = "http://localhost/edao-openid-conncet-demo-php/callback.php";
	// 认证版本
	private $Version = "std";
	// 认证网关地址
	private $OP_URL = "https://login.edaotech.com";

	public function getClientName(){
		return $this->ClientName;
	}
	public function getCredentials(){
		return $this->Credentials;
	}
	public function getCallbackUrl(){
		return $this->CallbackUrl;
	}
	public function getVersion(){
		return $this->Version;
	}
	public function getOpUrl(){
		return $this->OP_URL;
	}
}

?>
