<?php
require 'edao_oid_connect_sdk.php';

$sdk = new EdaoSDK();

$redirect_url = $sdk->redirectToOp();

echo '<a href="' . $redirect_url . '">Edao Login</a>';

?>
