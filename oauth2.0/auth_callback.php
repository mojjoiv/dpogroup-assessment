<?php
$authorizationCode = $_GET['code'];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => TOKEN_URL,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'grant_type' => 'authorization_code',
        'code' => $authorizationCode,
        'client_id' => CLIENT_ID,
        'client_secret' => CLIENT_SECRET,
        'redirect_uri' => REDIRECT_URI,
    ],
    CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($curl);
curl_close($curl);

$tokenData = json_decode($response, true);
$accessToken = $tokenData['access_token'];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => API_URL,
    CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $accessToken],
    CURLOPT_RETURNTRANSFER => true,
]);

$response = curl_exec($curl);
curl_close($curl);

$responseData = json_decode($response, true);
echo '<pre>';
print_r($responseData);
echo '</pre>';
?>
