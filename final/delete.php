<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = '{$post['title']}';
include_once __DIR__ . '/_components/header.php';
delete_post_by_id('$post['id']}');
include_once __DIR__ . '/_components/footer.php';
