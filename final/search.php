<?php
include_once __DIR__ . '/idm232/app.php';
$page_title = 'Search Results';
include_once __DIR__ . '/idm232/_components/header.php';
$posts = get_posts();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM posts';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR tags LIKE '%{$search}%'";
$query .= " OR contents LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $posts_results = true;
} else {
    $posts_results = false;
}

?>

<h1>Search Results</h1>
<h2>You searched for "<?php echo $search; ?>"</h2>
<?php
        // If no results, echo no results
        if (!$posts_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p>' . $_GET['error'] . '</p>';
  }?>

    <?php
    // If we have results, show them
      if ($posts_results) {
          while ($posts_results = mysqli_fetch_assoc($results)) {
            echo "
            <div class="list">
                <a href='{$site_url}/posts/>
                <img class="leading-image" src={$post['image']}>
                <h3>{$post['title']}</h3>
            </div>
            ";
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/idm232/_components/footer.php';
?>