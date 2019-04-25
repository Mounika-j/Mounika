<?php snippet('header') ?>

<?= css('assets/css/plugins.css') ?>

<div class="site">
	
	<div class="menu">
	  <?php snippet('plugins_menu') ?>
	</div>
	
<div class="content">

  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
	
	<?php if($page->hasNextVisible()) {
	
	echo('<p><em>Next: <a href="');
	echo ($page->next()->url());
	echo('"><strong>');
	echo($page->next()->title());
	echo('</strong></a></em></p>');
	
	}
	else if($page->hasChildren()) {
	
	echo('<p><em>Next: <a href="');
	echo ($page->children()->first()->url());
	echo('"><strong>');
	echo($page->children()->first()->title());
	echo('</strong></a></em></p>');
	
	}?>
	
    <footer class="colophon" role="contentinfo">
        <?php echo kirbytext($page->title()) ?> • <a href="#top"> Up ↑</a>
    </footer>

</div>
</div>

<?php snippet('footer') ?>