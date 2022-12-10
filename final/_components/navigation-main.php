<?php
  $site_url = site_url();
?>
<header>
<a href="<?php echo site_url(); ?>">
      <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="logo">
</a>

<?php
$search_value = '';
// If Search exist, make that the search value
if (isset($_GET['search'])) {
    $search_value = $_GET['search'];
}
?>
<div class="search-container">
    <form action="<?php echo site_url(); ?>/search" method="GET">
      <label for="">Search Recipes</label>
      <input type="text" placeholder="Search Recipes" name="search" value="<?php echo $search_value; ?>">
      <button type="submit"><span class="material-symbols-outlined">search</span></button>
    </form>
</div>
<!--
<div>
    <a href= '{$site_url}/register.php'>
    <span class="material-symbols-outlined">Sign Up</span>
    </a>
</div>
-->
</header>
<?php
<a href= '{$site_url}/write.php'>
<div class="write-button">
<span class="material-symbols-outlined">add</span>
</div>
</a>
?>