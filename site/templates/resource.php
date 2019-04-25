<?php snippet('tutorials_header'); ?>

 <div class="site">          
    <main role="main">

        <article class="blog format_text">
        	
        	<header class="post-meta">
                <div class="headerImage">
                	<?php echo image($page->headerImg()) ?>
                </div>
            </header>
            <div class="content">
				<h1><?php echo kirbytext($page->title()) ?></h1>
				<?php echo kirbytext($page->text()) ?>
            	
				<?php if($file = $page->file($page->graphicFile())) { ?>
					<p><strong>Graphic File:
					<a href="<?php echo $file->url() ?>">
				 	   <?php echo html($file->filename()) ?>
					</a></strong></p>
				<?php } ?>
				
				<?php echo kirbytext($page->credits()) ?>
				
            <footer class="post-sub cf">
            	<div class="post-sub-button">
    				<a href="<?php echo url() ?>/tutorials/">← Back</a>
    			</div>
                 
                <p>Share this on:
					 <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo rawurlencode($site->title()) ?>" target="blank" title="Tweet this"><img src="http://www.indeeo.com/idraw/tutorials/assets/images/twitter.png" alt="Share on Twitter" width="39" height="39" class="share-button" /></a>
					 <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url());?>&t=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on Facebook"><img src="http://www.indeeo.com/idraw/tutorials/assets/images/facebook.png" alt="Share on Facebook" width="39" height="39" /></a>
                </p>    			
            </footer>
            
            </div>
        </article>
    
    </main>

	<div class="comments">
		<?php snippet('disqus', array('disqus_shortname' => 'idraw-indeeo')) ?>
	</div>

</div>

<?php snippet('footer') ?>