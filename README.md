EdaoTech OpenID Connect Demo(PHP)
====================================

## 环境

* PHP 5.3
* CURL EXTENSION
* Apache with PHP Module / Nginx / Other Server

## 准备

* 从GitHub clone项目到服务器目录
* 申请接入应用的App License信息

## 代码
修改 `customize_config.php` 文件

```
class EdaoOIDConfig {
	// 客户代码名 : 请替换成真实客户代码名
	private $ClientName = "EdaoStd";
	// 应用证书 : 请替换成真实使用证书
	private $Credentials = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCANELcdE0uzTQ431SkuyN4RCQ0z0TCecSUhXQ0sOy9FITTnlzUs8Uja8K0dKp3Exxfegxf5USDtn1RA/22hMwYJ+3ovxHw5jxaQ0Vp8dXBTh08bCFXhvyHfjDC/8B4KAGkSkCyR3f4meFXQefa2GWTxqnf8LMJCnZTrGIFkwaB/wIDAQAB";
	// 回调地址 : 请替换成真实回调地址
	private $CallbackUrl = "http://localhost/edao-openid-conncet-demo-php/callback.php";

	// 认证版本 ：不需更改
	private $Version = "std";
	// 认证网关地址 ： 不需更改
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


```
