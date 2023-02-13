<?php
/** @var string $contentHTML */
/** @var string $username  */


use App\Controllers\Auth;

$username = Auth::getName();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>checkpoint2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/checkpoint2/public/css/style.css">
    <script src="https://kit.fontawesome.com/a3762f05b2.js" crossorigin="anonymous"></script>
    <script src="/checkpoint2/public/js/script.js"></script>
    <script src="/checkpoint2/public/js/validation.js"></script>
</head>
<body>

<div>
    <?= $contentHTML ?>
</div>
