
<?php

// application/config/oauth2.php


$config['oauth2']['authorize_url'] = 'https://login.microsoftonline.com/{tenant}/oauth2/v2.0/authorize';
$config['oauth2']['token_url'] = 'https://login.microsoftonline.com/{tenant}/oauth2/v2.0/token';
$config['oauth2']['client_id'] = '97acc689-d787-4a8c-ba0f-ec53780d7234';
$config['oauth2']['client_secret'] = 'Co18Q~krLS7ohA4PvnEwdM1Eh3m1aNlrOlXIvb6p';
$config['oauth2']['redirect_uri'] = 'https://localhost:8080/login/microsoft/callback';
$config['oauth2']['scope'] = 'openid profile email';
$config['oauth2']['resource_owner_details_url'] = 'https://graph.microsoft.com/v1.0/me';
