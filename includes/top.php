<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>INFO2300 Final Project</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
  <link href="css/info2300-final-project.stylesheet.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Roboto:300,regular,500"]
      }
    });
  </script>
  <script src="js/modernizr.js" type="text/javascript"></script>
</head>
<body>

<?php
if (!isset($_SESSION['logged_user'])){
?>

  <div class="w-clearfix"><a class="button-2 w-button" href="login.php">Login</a>
  </div>

<?php
} else {
?>

<div class="w-clearfix"><a class="button-2 w-button" href="login.php">Logout</a>
  </div>

<?
  }
?>

  <div class="dark navigation-bar w-nav" data-animation="default" data-collapse="medium" data-duration="400"><a class="brand-link left-spacing w-nav-brand" href="index.php"><h1 class="brand-text">A K A B A S &nbsp; &amp; &nbsp; S P R O U L E</h1></a>
    <nav class="navigation-menu w-nav-menu" role="navigation">
    <a class="navigation-link w-nav-link white" href="attorneys.php">Attorneys</a>
    <a class="navigation-link w-nav-link white" href="work.php">Work</a>
    <a class="navigation-link w-nav-link white" href="news-media.php">News&amp;Media</a>
    <a class="navigation-link w-nav-link white" href="contact.php">Contact</a>
    </nav>
    <div class="hamburger-button w-nav-button white">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>