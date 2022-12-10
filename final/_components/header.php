<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Bites By Bloom';
$document_title = $page_title . ' | ' . $site_title; // Home | Bites By Bloom

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Vollkorn&display=swap">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/default.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>
  <!-- Main Content Begins -->
  <?php include_once __DIR__ . '/idm232/components/navigation-main.php'; ?>