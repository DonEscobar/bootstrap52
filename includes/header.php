<?php
ob_start();
if (!isset($_SESSION)) session_start();
include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="<?= $siteLanguage ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $seoTitle ?></title>
    <meta name="description" content="<?= $seoDescription ?>">
    <link rel="canonical" href="https://www.area52labs.com/<?= $canonical ?>">

    <!-- Open Graph Tags -->
    <meta property="og:site_name" content="Unity">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $ogTitle ?>">
    <meta property="og:description" content="<?= $ogDescription ?>">
    <meta property="og:image" content="https://www.example.com/assets/images/og.jpg">

    <link rel="shortcut icon" href="favicon.ico?v=<?= $version ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="apple-touch-icon.png?v=<?= $version ?>">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap52.css?v=<?= $version ?>">
</head>
