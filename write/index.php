<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'Ancho-Orange Chicken';
include_once __DIR__ . '/_components/header.php';
?>

<form action="<?php echo site_url(); ?>/_includes/process-create-users.php" method="POST">
<div>
    <label for="">Recipe Name</label>
    <input class="neumorphic-inset" type="text" name="Recipe Name">
</div>
<br>
<div>
    <label for="">Instructions</label>
    <input class="neumorphic-inset" type="text" name="Instructions">
</div>
<input type="submit" value="submit">
</form>
<?php include_once __DIR__ . '/_components/footer.php';
