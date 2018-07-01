<?php
    if (!isset($page_title)) {
        $page_title = 'Staff Area';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GBI - <?php echo $page_title; ?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/staff.css')?>">
</head>
<body>
<header>
    <h1>GBI Staff Area</h1>
</header>
<nav>
    <ul>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
    </ul>
</nav>