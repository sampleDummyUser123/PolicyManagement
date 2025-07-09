<?php
// secrets_sample.php

// AWS Secret Key
$aws_secret = "wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY";

// Google API Key
$google_api_key = "AIzaSyA1234567890abcdefghijklmnopqrstuv";

// GitHub Token
$github_token = "ghp_1234567890abcdefghijklmnopqrstuvwxyzABC";

// Slack Webhook URL
$slack_webhook = "https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX";

// MySQL credentials
$db_user = "admin";
$db_password = "SuperSecret123!";
$db_host = "localhost";
$db_name = "mydb";

// Hardcoded JWT secret
$jwt_secret = "my$ecretK3yForJWTs1234567890";

// Private key
$private_key = <<<EOD
-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAxY4Xo5+XDFakePrivateKeyHereu1Zf1lKJhujZH
...
-----END RSA PRIVATE KEY-----
EOD;

// Basic Auth
$basic_auth_header = "Authorization: Basic YWRtaW46cGFzc3dvcmQ=";
?>
