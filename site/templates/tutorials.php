<?php snippet('tutorials_header'); ?>
<?= css('style.php/tutorial.scss') ?>

<div class="site tutorial-container ">
	<main role="main" class="container">
        
		<?php 
			$articles = $page->children()->visible()->flip()->paginate(15);
			$pagination = $articles->pagination();
			$isFirstPage = $pagination->isFirstPage();
		?>
		
		<div class="grid-container">
		
		<?php  if($isFirstPage) {
					$introArticles = $page->children()->visible()->limit(3); ?>
			
        	<h2>Tutorials - Basics</h2>
        	
	        <ul class="item-grid format_text">
	        	
	        	<?php foreach($introArticles as $article): ?>
	        	<li>
		      		<a href="<?php echo $article->url() ?>"><?php echo $article->image($article->thumbnail()) ?></a>
			  		<h4><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h4>
			  		<div class="subtext"><?php echo html($article->description()) ?></div>
				</li>
				<?php endforeach ?>
	        </ul>
	        
			<h2>Tutorials - Latest</h2>
			
			<?php } else { ?> <h2>Tutorials - Page <?=$pagination->page() ?></h2> <?php } ?>
			
	        <ul class="item-grid format_text">
	        	
	        	<?php foreach($articles as $article): ?>
	        	<li>
		      		<a href="<?php echo $article->url() ?>"><?php echo $article->image($article->thumbnail()) ?></a>
			  		<h4><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h4>
			  		<div class="subtext"><?php echo html($article->description()) ?></div>
				</li>
				<?php endforeach ?>
	        </ul>
			
			<div class="centered">
			  <div class="pagination">
			    <?php if($pagination->hasPrevPage()): ?>
			    <a href="<?php echo $pagination->prevPageURL() ?>">&larr;</a>
			    <?php endif ?>

			    <?php foreach($pagination->range(10) as $r): ?>
			    <a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a>
			    <?php endforeach ?>

			    <?php if($pagination->hasNextPage()): ?>
			    <a href="<?php echo $pagination->nextPageURL() ?>">&rarr;</a>
			    <?php endif ?>
			  </div>
			</div>
			
			<?php  if($isFirstPage) {
						$resourceArticles = $page->children()->find('resources')->children()->flip()->visible()->limit(6); ?>
			
			<h2>Example Files</h2>
	        
	        <ul class="item-grid format_text">
	        		        	
	        	<?php foreach($resourceArticles as $article): ?>
	        	<li>
		      		<a href="<?php echo $article->url() ?>"><?php echo $article->image($article->thumbnail()) ?></a>
			  		<h4><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h4>
			  		<div class="subtext"><?php echo html($article->description()) ?></div>
				</li>
				<?php endforeach ?>
	        </ul>
			
			<?php } ?>
			
        </div>
        
    </main>
	
	
</div>
    
<?php snippet('footer') ?>