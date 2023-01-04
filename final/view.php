<?php
include_once __DIR__ . '/app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}
$post = get_post_by_id($id);
$site_url = site_url();
$page_title = $post['title'];
include_once __DIR__ . '/_components/header.php';
include_once __DIR__ . '/_components/navigation-main.php';
$img = $post['image'].'.jpg';
echo "
    <h1>{$post['title']}</h1>
    <h3>{$post['tags']}</h3>
    <div class=\"image-container\">
        <img class=\"hero-image\" src={$site_url}/dist/images/recipes/{$img}>   
    </div>

    <br>
    <p>{$post['contents']}</p>
";
include_once __DIR__ . '/_components/footer.php';