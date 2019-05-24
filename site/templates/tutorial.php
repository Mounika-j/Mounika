<?php snippet('tutorials_header'); ?>
<?= css('style.php/tutorial.scss?v=1') ?>

<?php $tutFormat = s::get('format');
	
	$hasiPad = $page->find("ipad");
	$hasiPhone = $page->find("iphone");
	$onClickMac = true;
	$onClickIphone = false;
	$onClickIpad = false;

	if($hasiPhone && $tutFormat == "iphone")
	{
		$platformPage = $page->find("iphone");
		$macColor = "\"#000\"";
		$ipadColor = "\"#000\"";
		$iphoneColor = "\"#05a1e4\"";
		$onClickMac = false;
		$onClickIphone = true;
		$onClickIpad = false;
	}
	else if($hasiPad && $tutFormat == "ipad")
	{
		$platformPage = $page->find("ipad");
		$macColor = "\"#000\"";
		$ipadColor = "\"#05a1e4\"";
		$iphoneColor = "\"#000\"";
		$onClickMac = false;
		$onClickIphone = false;
		$onClickIpad = true;
	}
	else
	{
		$platformPage = $page->find("mac");
		$macColor = "\"#05a1e4\"";
		$ipadColor = "\"#000\"";
		$iphoneColor = "\"#000\"";
		$onClickMac = true;
		$onClickIphone = false;
		$onClickIpad = false;
	} ?>
	
<div class="site tutorial-container individual-tutorial">
    <main role="main" class="container">
        <article class="blog format_text">
        	
        	<header class="post-meta">
                <div class="headerImage">
                	<?php echo image($page->headerImg()) ?>
                </div>
            </header>
            <div class="content">
				
				<div id="formatButtons">
					<a href="<?php echo $page->url() . "?format=mac"  ?>">
						<?php if (!$onClickMac) { ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 64"><defs><style>.cls-5{fill:#f5f5f5}</style></defs><g id="Layer_19" data-name="Layer 19"><rect class="cls-5" x="3" y="3" width="72" height="40" rx="1"/><path class="cls-2" d="M75.5,0H2.5A2.5,2.5,0,0,0,0,2.5v48A2.5,2.5,0,0,0,2.5,53h73A2.5,2.5,0,0,0,78,50.5V2.5A2.5,2.5,0,0,0,75.5,0M75,42a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H74a1,1,0,0,1,1,1ZM51.57,64H26.42a.5.5,0,0,1-.31-.89l3.29-2.63a2,2,0,0,0,.73-1.24L31,54H47l.87,5.24a2,2,0,0,0,.73,1.24l3.29,2.63a.5.5,0,0,1-.32.89" fill=<?php echo $macColor ?> id="Mac"/></g></svg>
						<?php } else { ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 64"><defs><style>.cls-10{fill:#f0faff;}.cls-11{fill:#00acff;}</style></defs><g id="Layer_19" data-name="Layer 19"><rect class="cls-10" x="3" y="3" width="72" height="40" rx="1"/><path class="cls-11" d="M75.5,0H2.5A2.5,2.5,0,0,0,0,2.5v48A2.5,2.5,0,0,0,2.5,53h73A2.5,2.5,0,0,0,78,50.5V2.5A2.5,2.5,0,0,0,75.5,0M75,42a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H74a1,1,0,0,1,1,1ZM51.57,64H26.42a.5.5,0,0,1-.31-.89l3.29-2.63a2,2,0,0,0,.73-1.24L31,54H47l.87,5.24a2,2,0,0,0,.73,1.24l3.29,2.63a.5.5,0,0,1-.32.89"/></g></svg>
						<?php } ?>
					</a>
					<?php if($hasiPad) { ?>
					<a href="<?php echo $page->url() . "?format=ipad"  ?>">
						<?php if (!$onClickIpad) { ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 64"><defs><style>.cls-5{fill:#f5f5f5;}</style></defs><g id="Layer_19" data-name="Layer 19"><rect class="cls-5" x="3" y="3" width="43" height="58" rx="1"/><path class="cls-2" d="M45,3a1,1,0,0,1,1,1V60a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H45m0-3H4A4,4,0,0,0,0,4V60a4,4,0,0,0,4,4H45a4,4,0,0,0,4-4V4a4,4,0,0,0-4-4M56,13.5V17H53V13.5a1.5,1.5,0,0,1,3,0M53,18V57.6a4.15,4.15,0,0,0,.07.79l.3,1.61h2.25l.31-1.61A4.15,4.15,0,0,0,56,57.6V18Zm1,45.61a.45.45,0,0,0,.9,0L55.44,61H53.56Z" fill=<?php echo $ipadColor ?> id="iPad"/></g></svg>
						<?php } else { ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 64"><defs><style>.cls-10{fill:#f0faff;}.cls-11{fill:#00acff;}</style></defs><g id="Layer_19" data-name="Layer 19"><rect class="cls-10" x="3" y="3" width="43" height="58" rx="1"/><path class="cls-11" d="M45,3a1,1,0,0,1,1,1V60a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H45m0-3H4A4,4,0,0,0,0,4V60a4,4,0,0,0,4,4H45a4,4,0,0,0,4-4V4a4,4,0,0,0-4-4M56,13.5V17H53V13.5a1.5,1.5,0,0,1,3,0M53,18V57.6a4.15,4.15,0,0,0,.07.79l.3,1.61h2.25l.31-1.61A4.15,4.15,0,0,0,56,57.6V18Zm1,45.61a.45.45,0,0,0,.9,0L55.44,61H53.56Z"/></g></svg>
						<?php } ?>
					</a>
					<?php } ?>
					<?php if($hasiPhone) { ?>
					<a href="<?php echo $page->url() . "?format=iphone"  ?>">
						<?php if (!$onClickIphone) { ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 64"><defs><style>.cls-5{fill:#f5f5f5}</style></defs><g id="Layer_19" data-name="Layer 19"><path class="cls-5" d="M2,5V59a3,3,0,0,0,3,3H29a3,3,0,0,0,3-3V5a3,3,0,0,0-3-3H26a2,2,0,0,0-2,2,2,2,0,0,1-2,2H12a2,2,0,0,1-2-2A2,2,0,0,0,8,2H5A3,3,0,0,0,2,5Z"/><path class="cls-2" d="M29,0H5A5,5,0,0,0,0,5V59a5,5,0,0,0,5,5H29a5,5,0,0,0,5-5V5a5,5,0,0,0-5-5m3,59a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H8a2,2,0,0,1,2,2,2,2,0,0,0,2,2H22a2,2,0,0,0,2-2,2,2,0,0,1,2-2h3a3,3,0,0,1,3,3Z" fill=<?php echo $iphoneColor ?> id="iPhone" /></g></svg>
						<?php } else { ?>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 64"><defs><style>.cls-10{fill:#f0faff;}.cls-11{fill:#00acff;}</style></defs><g id="Layer_19" data-name="Layer 19"><path class="cls-10" d="M2,5V59a3,3,0,0,0,3,3H29a3,3,0,0,0,3-3V5a3,3,0,0,0-3-3H26a2,2,0,0,0-2,2,2,2,0,0,1-2,2H12a2,2,0,0,1-2-2A2,2,0,0,0,8,2H5A3,3,0,0,0,2,5Z"/><path class="cls-11" d="M29,0H5A5,5,0,0,0,0,5V59a5,5,0,0,0,5,5H29a5,5,0,0,0,5-5V5a5,5,0,0,0-5-5m3,59a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H8a2,2,0,0,1,2,2,2,2,0,0,0,2,2H22a2,2,0,0,0,2-2,2,2,0,0,1,2-2h3a3,3,0,0,1,3,3Z"/></g></svg>
						<?php } ?>
					</a>
					<?php } ?>
				</div>
				
				<div class="tutorial_steps">
					<h1><?php echo kirbytext($page->title()) ?></h1>
				
					<?php if($platformPage) { ?>
						<?php echo kirbytext($platformPage->text()) ?>
					<?php } ?>
								
					<?php if($file = $page->file($page->graphicFile())) { ?>
						<div class="graphic-file-wrap">
							<p class="file-wrapper"><strong>Download Graphic File:
							<a href="<?php echo $file->url() ?>">
								<?php echo html($file->filename()) ?>
								<img src="../assets/images/download.png" alt="no-image"/>
							</a></strong></p>
						</div>
					<?php } ?>
				</div>
				
            <footer class="post-sub cf">
            	<div class="post-sub-button">
    				<a href="<?php echo url() ?>/tutorials/"> < Back</a>
    			</div>
                 
                <p class="social-media-icons">Share:
					 <a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo rawurlencode($site->title()) ?>" target="blank" title="Tweet this" class="social-links">
					 	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-7{fill:#1da1f2;}</style></defs><<g id="Layer_14" data-name="Layer 14"><path class="cls-7" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM87.4,45.93l0,1.83C87.44,66.45,73.22,88,47.21,88a40,40,0,0,1-21.68-6.36,31.28,31.28,0,0,0,3.37.19,28.39,28.39,0,0,0,17.57-6A14.15,14.15,0,0,1,33.26,66a13,13,0,0,0,2.66.27,14.35,14.35,0,0,0,3.73-.5A14.16,14.16,0,0,1,28.3,51.86v-.17a14.06,14.06,0,0,0,6.41,1.77,14.17,14.17,0,0,1-4.38-18.88A40.16,40.16,0,0,0,59.48,49.36a14.15,14.15,0,0,1,24.1-12.89,28.62,28.62,0,0,0,9-3.44,14.2,14.2,0,0,1-6.22,7.82,28.38,28.38,0,0,0,8.12-2.22A28.2,28.2,0,0,1,87.4,45.93Z"/></g></svg>
					</a>
					 <a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url());?>&t=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on Facebook" class="social-links">
						 
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120"><defs><style>.cls-6{fill:#4267b2;}</style></defs><g id="Layer_14" data-name="Layer 14"><path class="cls-6" d="M100,0H20A20,20,0,0,0,0,20v80a20,20,0,0,0,20,20h80a20,20,0,0,0,20-20V20A20,20,0,0,0,100,0ZM72.06,60H64.42V88H53.92V60h-7V50.35h7l0-5.69C53.9,36.79,56,32,65.31,32H73v9.65H68.2c-3.61,0-3.78,1.35-3.78,3.87l0,4.83h8.68Z"/></g></svg>

					</a>
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