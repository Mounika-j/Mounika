<?php snippet('tutorials_header'); ?>

<?php $tutFormat = s::get('format');
	
	$hasiPad = $page->find("ipad");
	$hasiPhone = $page->find("iphone");

	if($hasiPhone && $tutFormat == "iphone")
	{
		$platformPage = $page->find("iphone");
		$macColor = "\"#909191\"";
		$ipadColor = "\"#909191\"";
		$iphoneColor = "\"#000\"";
	}
	else if($hasiPad && $tutFormat == "ipad")
	{
		$platformPage = $page->find("ipad");
		$macColor = "\"#909191\"";
		$ipadColor = "\"#000\"";
		$iphoneColor = "\"#909191\"";
	}
	else
	{
		$platformPage = $page->find("mac");
		$macColor = "\"#000\"";
		$ipadColor = "\"#909191\"";
		$iphoneColor = "\"#909191\"";
	} ?>
	
<div class="site">
    <main role="main">
        <article class="blog format_text">
        	
        	<header class="post-meta">
                <div class="headerImage">
                	<?php echo image($page->headerImg()) ?>
                </div>
            </header>
            <div class="content">
				
				<div id="formatButtons">
					<a href="<?php echo $page->url() . "?format=mac"  ?>">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="40" height="33" viewBox="0, 0, 40, 33">
							<g transform="translate(-2, 1)">
								<path d="M39.933,-0.002 C40.521,-0.002 41.002,0.479 41.002,1.067 L41.002,24.831 C41.002,25.419 40.521,25.9 39.933,25.9 L26,26 C26,26 26.057,29.177 27.207,30.039 C28.357,30.903 30.026,31.906 26,31.906 L17,31.906 C12.974,31.906 14.643,30.903 15.791,30.039 C16.942,29.177 17,26 17,26 L3.055,25.9 C2.467,25.9 1.986,25.419 1.986,24.831 L1.986,1.067 C1.986,0.479 2.467,-0.002 3.055,-0.002 L39.933,-0.002 z M21.424,23.087 C21.097,23.087 20.833,23.351 20.833,23.677 C20.833,24.004 21.097,24.269 21.424,24.269 C21.75,24.269 22.014,24.004 22.014,23.677 C22.014,23.351 21.75,23.087 21.424,23.087 z M39,2 L4,2 C4,2 4,21 4,21 L39,21 L39,2 z" fill=<?php echo $macColor ?> id="Mac"/>
						 		<path d="M4,2 L39,2 L39,21 L4,21 L4,2 z" fill=<?php echo $macColor ?> fill-opacity="0.2"/>
						  </g>
						</svg>			
					</a>
					<?php if($hasiPad) { ?>
					<a href="<?php echo $page->url() . "?format=ipad"  ?>">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="30" height="32" viewBox="0, 0, 30, 32">
						  <g transform="translate(-4, 0)">
							  <path d="M31.29,0 C32.24,0 33.017,0.773 33.017,1.719 L33.017,30.281 C33.017,31.227 32.24,32 31.29,32 L11.727,32 C10.777,32 10,31.227 10,30.281 L10,1.719 C10,0.773 10.777,0 11.727,0 L31.29,0 z M21.514,29.565 C21.011,29.565 20.605,29.969 20.605,30.468 C20.605,30.969 21.011,31.374 21.514,31.374 C22.015,31.374 22.421,30.969 22.421,30.468 C22.421,29.969 22.015,29.565 21.514,29.565 z M31,4 L12,4 C12,4 12,28 12,28 L31,28 L31,4 z M21.521,1.849 C21.208,1.849 20.954,1.96 20.954,2.098 C20.954,2.237 21.208,2.347 21.521,2.347 C21.831,2.347 22.084,2.237 22.084,2.098 C22.084,1.96 21.831,1.849 21.521,1.849 z" fill=<?php echo $ipadColor ?> id="iPad"/>
							  <path d="M12,4 L31,4 L31,28 L12,28 L12,4 z" fill=<?php echo $ipadColor ?> fill-opacity="0.2"/>
						  </g>
						</svg>
					</a>
					<?php } ?>
					<?php if($hasiPhone) { ?>
					<a href="<?php echo $page->url() . "?format=iphone"  ?>">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="30" height="32" viewBox="0, 0, 30, 32">
						  <g transform="translate(-9, 1)">
							      <path d="M26.734,2 C27.962,2 28.966,2.956 28.966,4.126 L28.966,28.864 C28.966,30.033 27.962,30.99 26.734,30.99 L16.232,30.99 C15.004,30.99 14,30.033 14,28.864 L14,4.126 C14,2.956 15.004,2 16.232,2 L26.734,2 z M21.467,27.928 C20.854,27.928 20.359,28.399 20.359,28.981 C20.359,29.564 20.854,30.035 21.467,30.035 C22.078,30.035 22.573,29.564 22.573,28.981 C22.573,28.399 22.078,27.928 21.467,27.928 z M28,6 L15,6 C15,6 15,27 15,27 L28,27 L28,6 z M21.565,3.697 C21.146,3.697 20.807,3.815 20.807,3.96 C20.807,4.106 21.146,4.224 21.565,4.224 C21.981,4.224 22.32,4.106 22.32,3.96 C22.32,3.815 21.981,3.697 21.565,3.697 z" fill=<?php echo $iphoneColor ?> id="iPhone"/>
								 <path d="M15,6 L28,6 L28,27 L15,27 L15,6 z" fill=<?php echo $iphoneColor ?> fill-opacity="0.2"/>
						  </g>
						</svg>
					</a>
					<?php } ?>
				</div>
				
				<div class="tutorial_steps">
					<h1><?php echo kirbytext($page->title()) ?></h1>
				
					<?php if($platformPage) { ?>
						<?php echo kirbytext($platformPage->text()) ?>
					<?php } ?>
								
					<?php if($file = $page->file($page->graphicFile())) { ?>
						<p><strong>Graphic File:
						<a href="<?php echo $file->url() ?>">
					 	   <?php echo html($file->filename()) ?>
						</a></strong></p>
					<?php } ?>
				</div>
				
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