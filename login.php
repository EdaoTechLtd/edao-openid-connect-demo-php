<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edao OpenID Connect Demo (PHP Edition)</title>
</head>
<style type="text/css">
/********默认按钮风格*******/
.button-edao {
	background: none repeat scroll 0 0 #DB2033;
	border-color: #9E1D2A;
	box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset, 0 1px 0 rgba(0, 0, 0, 0.15);
	color: #FFFFFF;
	text-decoration: none;
	height: 30px;
	line-height: 28px;
	-moz-box-sizing: border-box;
	border-radius: 3px;
	border-style: solid;
	border-width: 1px;
	cursor: pointer;
	display: inline-block;
	font-size: 13px;
}
.button-edao:hover {
	background: none repeat scroll 0 0 #B82030;
	border-color: #9E1D2A;
}

</style>
<body>
<a href="
<?php
require 'edao_oid_connect_sdk.php';

$sdk = new EdaoSDK();

$redirect_url = $sdk->redirectToOp();

echo $redirect_url;

?>

" class="button-edao">翼道快捷登录</a>
</body>
</html>

