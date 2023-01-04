<?php

/**
 * Insert a post into the database
 * @param  string $title - title of the post
 * @param  string $tags - categories associated with the post
 * @param  string $image - path of the post's featured header image
 * @param  string $contents - main body content of the post
 * @return object - mysqli_result
 */
function add_post($title, $tags, $image, $contents)
{
    global $db_connection;
    $query = "INSERT INTO posts";
    $query .= " (title, tags, image, contents)";
    $query .= " VALUES ('$title', '$tags', '$image', '$contents')";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Get all posts from the database
 * @return object - mysqli_result
 */
function get_posts()
{
    global $db_connection;
    $query = 'SELECT * FROM posts';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Get a specific post from the database with a provided id
 * @param int $id - id of the desired post
 * @return object - mysqli_result if found; false if not.
 */
function get_post_by_id($id)
{
    global $db_connection;
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    if ($result->num_rows > 0) {
        $post = mysqli_fetch_assoc($result);
        return $post;
    } else {
        return false;
    }
}

/**
 * Edit a post in the database with a provided id
 * @param  string $title - title of the post
 * @param  string $tags - categories associated with the post
 * @param  string $image - path of the post's featured header image
 * @param  string $contents - main body content of the post
 * @return object - mysqli_result
 */
function edit_post($title, $tags, $image, $contents, $id)
{
    global $db_connection;
    $query = "UPDATE posts";
    $query .= " SET title = '$title', image = '$image', tags = '$tags', contents = '$contents'";
    $query .= " WHERE id = $id";
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Edit a post in the database with a provided id
 * @param  int $id - id of the post
 * @return object - mysqli_result
 */
function delete_post_by_id($id)
{
    global $db_connection;
    $query = "DELETE FROM posts WHERE id = '$id'";
    $result = mysqli_query($db_connection, $query);
    return $result;
}