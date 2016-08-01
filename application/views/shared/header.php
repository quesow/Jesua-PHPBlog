<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?= $page_title ?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= base_url("assets/components/starter-template/css/materialize.css") ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?= base_url("assets/components/starter-template/css/style.css") ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?= base_url("assets//css/custom.css") ?>" type="text/css" rel="stylesheet">
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="<?=base_url('assets/img/asd.jpg')?>">Jesua PHPBLog</img></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?= base_url('about') ?>">About</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?= base_url('about') ?>>">About</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
