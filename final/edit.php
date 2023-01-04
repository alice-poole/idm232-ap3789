<?php
include_once __DIR__ . '/app.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}
$post = get_post_by_id($id);
$page_title = 'Editing ' . $post['title'];
include_once __DIR__ . '/_components/header.php';
include_once __DIR__ . '/_components/navigation-main.php';
?>
<h2>Editing <?php echo $post['title'];?></h2>
<?php $site_url = site_url();?>

<form action="<?php echo site_url();?>/process-edit-posts.php?id=<?php echo $id ?>" method="POST">
    <label for="">Title</label>
    <input type="text" name="title" value="<?php echo $post['title']?>">
    <br><br>
    <label for="">Image</label>
    <input type="text" name="image" value="<?php echo $post['image']?>">
    <br><br>
    <label for="">Tags</label>
    <input type="text" name="tags" value="<?php echo $post['tags']?>">
    <br><br>
    <label for="">Contents</label>
    <textarea name="contents" rows="15" columns="30"><?php echo $post['contents']?></textarea>
    <br><br>
    <input type="submit" value="submit">

<?php
include_once __DIR__ . '/idm232/_components/footer.php';