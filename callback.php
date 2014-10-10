<?php
require 'edao_oid_connect_sdk.php';

$sdk = new EdaoSDK();
$code = $_GET['code'];
$sec = $_GET['random'];

$userInfo = $sdk->getUserInfo($code, $sec);

echo $userInfo . "\n";
?>
