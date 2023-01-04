<div class="header">
  <div class="brand">
    <a href="<?php echo site_url(); ?>" class="logo">
    <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="logo" class="logo">
    </a>
  </div>

<?php
$search_value = '';
if (isset($_GET['search'])) {
    $search_value = $_GET['search'];
}
?>
<div class="search-container">
    <form action="<?php echo site_url(); ?>/search.php\" method="GET">
      <input type="text" placeholder="Search Recipes" name="search" value="<?php echo $search_value; ?>">
      <button type="submit"><span class="material-symbols-outlined">search</span></button>
    </form>
</div>

</div>
<a href= "<?php echo site_url(); ?>/write.php">
<div class="write-button">
<span class="material-symbols-outlined">add</span>
</div>
</a>