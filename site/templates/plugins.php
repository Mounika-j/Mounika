<?php snippet('header') ?>

<?= css('assets/css/plugins.css?v=1') ?>

	

<div class="site">
	<div class="menu">
	  <?php snippet('plugins_menu') ?>
	</div>
	
<div class="content">

	<main role="main">
      <?php {   /*** article overview ***/
		$articles = $page->children()->find('examples')->children()->visible();
      }?>

    <h2>Example Graphic Plug-ins</h2>
	  
	  <br/>
	  
      <div class="grid-container">
      	
        <ul class="item-grid">
        	
        	<?php foreach($articles as $article): ?>
        	<li>
		  		<?php echo kirbytext($article->thumbnail()) ?>
				<h4><?php echo html($article->title()) ?></h4>
		  		<div class="subtext"><?php echo html($article->description()) ?></div>
				<div class="downloadText"><?php echo kirbytext($article->plugfile()) ?></div>
				<div class="requirementsText">Requirements: <?php echo excerpt($article->requirements()) ?></div>
			</li>
			<?php endforeach ?>
        </ul>
      </div>
      
	 <div style="width: 60%; margin-left: auto; margin-right:auto">
	  	<br/>
	  	<p style="text-align:center; margin-top: 20px; margin-bottom: 10px">Many more plug-ins coming soon! Follow us on Twitter for updates on newly added plug-ins and tutorials...</P>
	</div>
	  
  </main>
  
  <footer class="colophon" role="contentinfo">
      <?php echo kirbytext($page->title()) ?> • <a href="#top"> Up ↑</a>
  </footer>
  
</div>
</div>

<?php snippet('footer') ?>