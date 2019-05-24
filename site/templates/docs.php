<?php snippet('header') ?>

<?= css('assets/css/docs.css?v=1') ?>

<div class="site">
	
	<div class="menu">
	  <?php snippet('docs_menu') ?>
	</div>
	
<div class="content">
	<main role="main">
        <article class="blog format_text">
		  <h1><?php echo html($page->title()) ?></h1>
		  <?php echo kirbytext($page->text()) ?>
	
			<?php if($page->hasNextVisible()) {
	
			echo('<p>Next: <a class="path-link" href="');
			echo ($page->next()->url());
			echo('">');
			echo($page->next()->title());
			echo(' > </a></em></p>');
			
			go($page->next()->url());
	
			}
			else if($page->hasChildren()) {
	
			echo('<p>Next: <a  class="path-link" href="');
			echo ($page->children()->first()->url());
			echo('">');
			echo($page->children()->first()->title());
			echo(' > </a> </p>');
			
			go($page->children()->first()->url());
			
			}?>

			</div>
	
        </article>
    </main>
</div>

<?php snippet('footer') ?>
