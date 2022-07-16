<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Planète_Green
 */

?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <?php include  ROOT . 'View/head/static.php'; ?>

    <?php wp_head(); ?>
</head>
<body>
<div id="app">
    <main id="main" style="height: 100vh">
        <a href="<?= esc_url( home_url( '/' ) ); ?>"
           rel="home"
           style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,50%);color: #417764;text-decoration: underline;">
            BACK TO HOME
        </a>
    </main>
</div>
</body>
</html>
