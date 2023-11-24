10>//Using PHP, make a GET request to a sample REST API (e.g., JSONPlaceholder) to retrieve a list
of users. Parse the JSON response and display the user's name and email address.//

<?php

// Make a GET request 
$url = 'https://jsonplaceholder.typicode.com/users';
$response = file_get_contents($url);

// Decode the JSON response
$users = json_decode($response, true);

// it goes through the list of users and display their names and email addresses
foreach ($users as $user) {
    echo "Name: " . $user['name'] . "\n";
    echo "Email: " . $user['email'] . "\n\n";
}
