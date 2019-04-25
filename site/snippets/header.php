<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=utf-8"  name="Create vector drawings, mockups, and illustrations with Graphic for Mac, iPad and iPhone" />
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?= css('assets/css/main.css') ?>
  <?= css('style.php/header.scss') ?>
  <?= css('style.php/footer.scss') ?>

  <?= css('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') ?>

</head>
<body>

  <?php $storeurl = $page->storeURL();
  		if($storeurl == "") $storeurl = $site->storeURL(); ?>

  <?php $tutsurl = $page->tutorialsURL();
  		if($tutsurl == "") $tutsurl = $site->tutorialsURL(); ?>
		
  <?php $docsurl = $page->docsURL();
  		if($docsurl == "") $docsurl = $site->docsURL(); ?>

  <header id="header" class="header-wrap">
    <div class="container header">
      <div class="logo"><a href="<?= $site->url() ?>"><img src="<?php echo url('assets/images/logo.png') ?>"/></a></div>
      <nav id="nav" class="desktop-menu-nav-container nav-menu">
        <ul>
          <li><a href="<?= $site->url() ?>/mac/">Mac</a></li>
          <li><a href="<?= $site->url() ?>/ipad-pro/">iPad Pro</a></li>
          <li><a href="<?= $site->url() ?>/ipad/">iPad</a></li>
          <li><a href="<?= $site->url() ?>/iphone/">iPhone</a></li>
		  <li><a href="<?= $site->url() . $docsurl ?>">Learn</a></li>
          <li><a href="<?= $site->url() . $tutsurl ?>">Tutorials</a></li>
          <li><a href="mailto:help@graphic.com">Support</a></li>
          <li><a class="buy" href="<?= $storeurl ?>"><strong>Buy Now</strong></a></li>
        </ul>
      </nav>
      <img id="nav-icon" src="<?php echo url('assets/images/menuIcon.png') ?>">
    </div>
      <nav id="nav-mobile" class="menu-nav-container ">
        <ul>
          <li><a href="<?= $site->url() ?>/mac/">Mac</a></li>
          <li><a href="<?= $site->url() ?>/ipad-pro/">iPad Pro</a></li>
          <li><a href="<?= $site->url() ?>/ipad/">iPad</a></li>
          <li><a href="<?= $site->url() ?>/iphone/">iPhone</a></li>
          <li><a href="<?= $site->url() ?>/tutorials/">Tutorials</a></li>
          <li><a href="mailto:help@graphic.com">Support</a></li>
          <li><a href="<?= $storeurl ?>"><strong>Buy Now</strong></a></li>
        </ul>
      </nav>
  </header>
