<?php
include __DIR__ . '/app.php';
?>
<?php
if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title = sanitize_value($_POST['title']);
$tags = sanitize_value($_POST['tags']);
$image = sanitize_value($_POST['image']);
$contents = sanitize_value($_POST['contents']);

$result = add_post($title, $tags, $image, $contents);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('');
} 
else {
    $error_message = 'Sorry there was an error creating the post: ' . mysqli_error($db_connection);
    echo $error_message;
}
?>