<?php
if (!isset($posts)) {
    echo '$[posts] variable is not defined. Please check the code.';
}
?>
<h2>All Recipes</h2>
<?php
    
    // Cant combine functions with string so we have to assign the function to a variable here.
$posts = get_posts();
$site_url = site_url();
while ($post = mysqli_fetch_array($posts)) {
    $img = $post['image'].'.jpg';
    echo "
          <div class=\"container\">
            <div class=\"list\">
              <a href={$site_url}/view.php?id={$post['id']}>
                <div class=\"list\">
                <img class=\"leading-image\" src={$site_url}/dist/images/recipes/{$img}>
                <h3>{$post['title']}</h3>
                </div>
              </a>
            </div>
            <div class=\"list\">
              <a href={$site_url}/edit.php?id={$post['id']}>Edit <span class=\"material-symbols-outlined\">edit</span></a>
              <a href={$site_url}/delete.php?id={$post['id']}>Delete <span class=\"material-symbols-outlined\">delete</span></a>
            </div>
          </div>
          ";
}
?>