<?php
include __DIR__ . '/app.php';
if (!$_POST) {
    die('Unauthorized');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}
$post = get_post_by_id($id);
// Store $_POST data to variables for readability
$title = sanitize_value($_POST['title']);
$tags = sanitize_value($_POST['tags']);
$image = sanitize_value($_POST['image']);
$contents = sanitize_value($_POST['contents']);

$result = edit_post($title, $tags, $image, $contents, $id);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('');
} 
else {
    $error_message = 'Sorry there was an error updating the post: ' . mysqli_error($db_connection);
    echo $error_message;
    //redirect_to('?error=' . $error_message . '.php');
}
?>