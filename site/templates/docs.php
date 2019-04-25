<?php snippet('header') ?>

<?= css('assets/css/docs.css') ?>

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
	
			echo('<p><em>Next: <a href="');
			echo ($page->next()->url());
			echo('"><strong>');
			echo($page->next()->title());
			echo('</strong></a></em></p>');
			
			go($page->next()->url());
	
			}
			else if($page->hasChildren()) {
	
			echo('<p><em>Next: <a href="');
			echo ($page->children()->first()->url());
			echo('"><strong>');
			echo($page->children()->first()->title());
			echo('</strong></a></em></p>');
			
			go($page->children()->first()->url());
			
			}?>

			</div>
	
        </article>
    </main>
</div>

<?php snippet('footer') ?>
