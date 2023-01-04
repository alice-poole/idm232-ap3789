<?php
include_once __DIR__ . '/app.php';
include_once __DIR__ . '/_components/header.php';
include_once __DIR__ . '/_components/navigation-main.php';
$page_title = 'Search Results';
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
// If we have results, show them
    if ($posts_results) {
        while ($posts_results = mysqli_fetch_assoc($results)) {
            $img = $posts_results['image'].'.jpg';
            echo "
          <div class=\"container\">
            <div class=\"list\">
              <a href={$site_url}/view.php?id={$posts_results['id']}>
                <div class=\"list\">
                <img class=\"leading-image\" src={$site_url}/dist/images/recipes/{$img}>
                <h3>{$posts_results['title']}</h3>
                </div>
              </a>
            </div>
            <div class=\"list\">
              <a href={$site_url}/edit.php?id={$posts_results['id']}>Edit <span class=\"material-symbols-outlined\">edit</span></a>
              <a href={$site_url}/delete.php?id={$posts_results['id']}>Delete <span class=\"material-symbols-outlined\">delete</span></a>
            </div>
          </div>
          ";
        }
      } else {
        // If no results, echo no results
        echo '<p>No results found.</p>';
      }
?>

  </div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';?>