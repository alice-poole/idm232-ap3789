<?php
if (!isset($posts)) {
    echo '$[posts] variable is not defined. Please check the code.';
}
?>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($post = mysqli_fetch_array($posts)) {
    echo "
          <div class="list">
              <a href='{$site_url}/view?id=$post['id']}'>
              <img class="leading-image" src={$post['image']}>
              <h3>{$post['title']}</h3>
              </a>
              <br>
              <a href='{$site_url}/edit?id=$post['id']}'>Edit</a>
              <a href='{$site_url}/delete?id=$post['id']}'>Delete</a>
          </div>
          ";
}
?>