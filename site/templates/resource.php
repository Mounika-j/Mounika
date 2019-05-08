<?php snippet('tutorials_header'); ?>
<?= css('style.php/tutorial.scss') ?>


 <div class="site tutorial-container">          
    <main role="main " class="container ">

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
					<div class="graphic-file-wrap">
						<p class="file-wrapper"><strong>Graphic File:
						<a href="<?php echo $file->url() ?>">
						<?php echo html($file->filename()) ?>
							<img src="../../assets/images/download.png" alt="no-image"/>
						</a></strong></p>
						<?php echo kirbytext($page->credits()) ?>
					</div>
				<?php } ?>
				
				
				
            <footer class="post-sub cf">
            	<div class="post-sub-button">
    				<a href="<?php echo url() ?>/tutorials/">< Back</a>
    			</div>
                 
                <p>Share this on:
					 <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo rawurlencode($site->title()) ?>" target="blank" title="Tweet this" class="social-links"><img src="../../assets/images/twitter.png" alt="Share on Twitter" width="39" height="39" class="share-button" /></a>
					 <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url());?>&t=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on Facebook" class="social-links"><img src="../../assets/images/facebook.png" alt="Share on Facebook" width="39" height="39" class="share-button" /></a>
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