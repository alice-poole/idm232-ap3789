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

$result = add_post($title, $tags, $image, $contents);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('{$site_url}/view?id=' . $id . '.php');
} 
else {
    $error_message = 'Sorry there was an error creating the post: ' . mysqli_error($db_connection);
    redirect_to('{$site_url}?error=' . $error_message . '.php');
}