<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}
include_once __DIR__ . '/app.php';
$post = get_post_by_id($id);
$page_title = 'Deleting ' . $post['title'];
$result = delete_post_by_id($id);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('');
} 
else {
    $error_message = 'Sorry there was an error deleting the post: ' . mysqli_error($db_connection);
    echo $error_message;
}