<?php
include_once __DIR__ . '/idm232/app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title = $_POST['title'];
$tags = $_POST['tags'];
$image = $_POST['image'];
$contents = $_POST['contents'];
$id = $_POST['id'];

// Create a SQL statement to insert the data into the database
function edit_post($title, $tags, $image, $contents, $id);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('{$site_url}/view?id=' . $id);
} else {
    $error_message = 'User was not updated';
    redirect_to('{$site_url}/view?error=' . $error_message);
}