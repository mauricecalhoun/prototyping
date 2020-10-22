<?php
  require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html class="h-full bg-gray-200">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="<?= mix('/build/css/app.css'); ?>" rel="stylesheet">
    <script
        src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign"
        defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>
</head>

<body class="font-sans leading-none text-gray-700 antialiased">
    <div id="app"></div>

</body>


<script src="<?= mix('/build/js/app.js'); ?>"></script>

</html>