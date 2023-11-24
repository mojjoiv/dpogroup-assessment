14>//Write a PHP script that integrates with a REST API protected by OAuth 2.0 authentication.
Implement the OAuth 2.0 authorization code flow to obtain an access token and use that
token to make authenticated requests to the API. Provide a code example that demonstrates
the complete authentication and data retrieval process.//

Solution: //i decided to use the Oauth2.0 sandbox to get all the rquired urls and uris//

<?php
const CLIENT_ID = '5udBQQEUhqAEQT5ufacMBPNb';
const CLIENT_SECRET = 'tdnY_6c7MLveQvxaM-Wy4OmvCit__AjLytTo9yeNAhBkeI67';

const AUTHORIZATION_URL = 'https://authorization-server.com/authorize?';

const TOKEN_URL = 'https://api.example.com/oauth/token';

const API_URL = 'https://api.example.com/api/data';

const SCOPE = 'photo+offline_access';

const REDIRECT_URI = 'https://www.oauth.com/playground/authorization-code.html';

header('Location: ' . AUTHORIZATION_URL . '?client_id=' . CLIENT_ID . '&response_type=code&redirect_uri='
 . REDIRECT_URI . '&scope=' . SCOPE);
 ?>
