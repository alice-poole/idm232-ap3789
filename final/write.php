<?php
include_once __DIR__ . '/app.php';
include_once __DIR__ . '/_components/header.php';
include_once __DIR__ . '/_components/navigation-main.php';
$page_title = 'Home';
?>
<h2>Write A Post</h2>

<?php $posts = get_posts();?>
<?php $site_url = site_url();?>

<form action="<?php echo site_url(); ?>/process-create-posts.php" method="POST">
    <label for="">Title</label>
    <input type="text" name="title">
    <br><br>
    <label for="">Image</label>
    <input type="text" name="image">
    <br><br>
    <label for="">Tags</label>
    <input type="text" name="tags">
    <br><br>
    <label for="">Contents</label>
    <textarea name="contents" rows="15" columns="30"></textarea>
    <br><br>
    <input type="submit" value="submit">

<?php
include_once __DIR__ . '/idm232/_components/footer.php';
