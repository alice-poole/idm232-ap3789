<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'JAWN Clips';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/default.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/styles.css">
  <title><?php echo $document_title ; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Vollkorn:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Main Content Begins -->
  <nav>
        <img class="nav nav-image" src="img/logo.png" alt="Home">
        <div class="nav-input">
            <input class="neumorphic-inset" type="text">
            <button class="neumorphic-yellow-light">Search</button>
        </div>
        <img class="nav nav-image" src="../dist/images/account_circle_FILL1_wght400_GRAD0_opsz48.png" alt="Profile">
    </nav>
    <main>