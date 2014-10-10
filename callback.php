<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edao OpenID Connect Demo (PHP Edition)</title>
</head>

<body>
<?php
require 'edao_oid_connect_sdk.php';

$sdk = new EdaoSDK();
$code = $_GET['code'];
$sec = $_GET['random'];

$userInfo = $sdk->getUserInfo($code, $sec);

echo $userInfo . "\n";
?>
</body>
</html>
