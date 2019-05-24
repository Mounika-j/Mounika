<?php snippet('tutorials_header'); ?>
<?= css('style.php/tutorial.scss?v=1') ?>


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
                 
                <p class="social-media-icons">Share this on:
					<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo rawurlencode($site->title()) ?>" target="blank" title="Tweet this" class="social-links">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-7{fill:#1da1f2;}</style></defs><<g id="Layer_14" data-name="Layer 14"><path class="cls-7" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM87.4,45.93l0,1.83C87.44,66.45,73.22,88,47.21,88a40,40,0,0,1-21.68-6.36,31.28,31.28,0,0,0,3.37.19,28.39,28.39,0,0,0,17.57-6A14.15,14.15,0,0,1,33.26,66a13,13,0,0,0,2.66.27,14.35,14.35,0,0,0,3.73-.5A14.16,14.16,0,0,1,28.3,51.86v-.17a14.06,14.06,0,0,0,6.41,1.77,14.17,14.17,0,0,1-4.38-18.88A40.16,40.16,0,0,0,59.48,49.36a14.15,14.15,0,0,1,24.1-12.89,28.62,28.62,0,0,0,9-3.44,14.2,14.2,0,0,1-6.22,7.82,28.38,28.38,0,0,0,8.12-2.22A28.2,28.2,0,0,1,87.4,45.93Z"/></g></svg>
					</a>
					 <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url());?>&t=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on Facebook" class="social-links"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-6{fill:#4267b2;}</style></defs><g id="Layer_14" data-name="Layer 14"><path class="cls-6" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM72.06,60H64.42V88H53.92V60h-7V50.35h7l0-5.69C53.9,36.79,56,32,65.31,32H73v9.65H68.2c-3.61,0-3.78,1.35-3.78,3.87l0,4.83h8.68Z"/></g></svg></a>
                </p>    			
            </footer>
            
            </div>
        </article>
    
    </main>

	<!-- <div class="comments">
		<?php //snippet('disqus', array('disqus_shortname' => 'idraw-indeeo')) ?>
	</div> -->

</div>

<?php snippet('footer') ?>