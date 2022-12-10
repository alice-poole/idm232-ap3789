<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = '{$post['title']}';
include_once __DIR__ . '/_components/header.php';
<h1>'{$post['title']}'</h1>
<br>
<h3>'{$post['tags']}'</h3>
<br>
<img class="leading-image" src={$post['image']}>
<br>
<p>'{$post['contents']}'</p>
include_once __DIR__ . '/_components/footer.php';
