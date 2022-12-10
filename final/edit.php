<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/idm232/app.php';
$page_title = '{$post['title']}';
include_once __DIR__ . '/_components/header.php';
?>
<h2>Edit Post</h2>

<form action="<?php echo site_url(); ?>/includes/process-edit-posts.php" method="POST">
    <label for="">Title</label>
    <input type="text" name="title">

    <label for="">Image</label>
    <input type="text" name="image">

    <label for="">Tags</label>
    <input type="text" name="tags">

    <label for="">Contents</label>
    <input type="text" name="contents">

    <input type="submit" value="submit">

<h1>'{$post['title']}'</h1>
<br>
<h3>'{$post['tags']}'</h3>
<br>
<img class="leading-image" src="{$post['image']}">
<br>
<p>'{$post['contents']}'</p>

<?php
include_once __DIR__ . '/idm232/_components/footer.php';
