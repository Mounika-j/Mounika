<?php snippet('header') ?>

<?= css('assets/css/docs.css') ?>
<?= css('style.php/learn.scss') ?>

<div class="site learn-page">
	<div class="container learn-container">
		<div class="menu ">
			
			<?php $tutFormat = s::get('format');
	
				$pURL = $page->url();
	
				if(strpos($pURL, 'docs-iphone') !== false)
				{
					$macColor = "\"#000\"";
					$ipadColor = "\"#000\"";
					$iphoneColor = "\"#05a1e4\"";
				}
				else if(strpos($pURL, 'docs-ipad') !== false)
				{
					$macColor = "\"#000\"";
					$ipadColor = "\"#05a1e4\"";
					$iphoneColor = "\"#000\"";
				}
				else
				{
					$macColor = "\"#05a1e4\"";
					$ipadColor = "\"#000\"";
					$iphoneColor = "\"#000\"";
				} ?>


		
							<div id="formatButtons" class="formatButtons-wrap">
								<div class="formatButtonsBlock">
									<a href="<?php echo $site->url() . "/docs/new-documents"  ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 64"><defs><style>.cls-5{fill:#f5f5f5}</style></defs><g id="Layer_19" data-name="Layer 19"><rect class="cls-5" x="3" y="3" width="72" height="40" rx="1"/><path class="cls-2" d="M75.5,0H2.5A2.5,2.5,0,0,0,0,2.5v48A2.5,2.5,0,0,0,2.5,53h73A2.5,2.5,0,0,0,78,50.5V2.5A2.5,2.5,0,0,0,75.5,0M75,42a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H74a1,1,0,0,1,1,1ZM51.57,64H26.42a.5.5,0,0,1-.31-.89l3.29-2.63a2,2,0,0,0,.73-1.24L31,54H47l.87,5.24a2,2,0,0,0,.73,1.24l3.29,2.63a.5.5,0,0,1-.32.89" fill=<?php echo $macColor ?> id="Mac"/></g></svg>	
									</a>
									<a href="<?php echo $site->url() . "/docs-ipad/documents"  ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 64"><defs><style>.cls-5{fill:#f5f5f5;}</style></defs><g id="Layer_19" data-name="Layer 19"><rect class="cls-5" x="3" y="3" width="43" height="58" rx="1"/><path class="cls-2" d="M45,3a1,1,0,0,1,1,1V60a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H45m0-3H4A4,4,0,0,0,0,4V60a4,4,0,0,0,4,4H45a4,4,0,0,0,4-4V4a4,4,0,0,0-4-4M56,13.5V17H53V13.5a1.5,1.5,0,0,1,3,0M53,18V57.6a4.15,4.15,0,0,0,.07.79l.3,1.61h2.25l.31-1.61A4.15,4.15,0,0,0,56,57.6V18Zm1,45.61a.45.45,0,0,0,.9,0L55.44,61H53.56Z" fill=<?php echo $ipadColor ?> id="iPad"/></g></svg>
									</a>
									<a href="<?php echo $site->url() . "/docs-iphone/documents"  ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 64"><defs><style>.cls-5{fill:#f5f5f5}</style></defs><g id="Layer_19" data-name="Layer 19"><path class="cls-5" d="M2,5V59a3,3,0,0,0,3,3H29a3,3,0,0,0,3-3V5a3,3,0,0,0-3-3H26a2,2,0,0,0-2,2,2,2,0,0,1-2,2H12a2,2,0,0,1-2-2A2,2,0,0,0,8,2H5A3,3,0,0,0,2,5Z"/><path class="cls-2" d="M29,0H5A5,5,0,0,0,0,5V59a5,5,0,0,0,5,5H29a5,5,0,0,0,5-5V5a5,5,0,0,0-5-5m3,59a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H8a2,2,0,0,1,2,2,2,2,0,0,0,2,2H22a2,2,0,0,0,2-2,2,2,0,0,1,2-2h3a3,3,0,0,1,3,3Z" fill=<?php echo $iphoneColor ?> id="iPhone" /></g></svg>
									</a>
								</div>
								<form class="doc-search-form">
									<i class="doc-search-icon">&#128269;</i>
									<input placeholder="Search" class="doc-search" type="search" autocomplete="off" name="q" value="<?= html($query) ?>">
								</form>
							</div>

			<?php
		  	//<i class="fas fa-caret-down"></i>
		  	echo '<button class="collapsible">'.$page->title().'<i class="arrow-icon">&#10148;</i></button>';
		  ?>
		  <?php snippet('docs_menu') ?>
		</div>
		<div class="content">
		<?php if($query && count($results) > 0) {?>
			<h3 id="search-title">Search Results</h3>
		<?php } ?>
		<?php if($query && count($results) == 0) {?>
			<h3 id="search-title">No Search results available.</h3>
		<?php } ?>
		<?php if($query && count($results) > 0) {?>
			<?php 
				$pURL = $page->url();
	
				if(strpos($pURL, 'docs-iphone'))
				{
					$deviceDocs = "docs-iphone";
				}
				else if(strpos($pURL, 'docs-ipad'))
				{
					$deviceDocs = "docs-ipad";
				}
				else
				{
					$deviceDocs = "docs";
				}
				?>
			<ul class="doc-search-results">
	            <?php foreach ($results as $result): ?><?php if(Str::contains($result->url(), '/'.$deviceDocs.'/')) {?>
					<li>
						<a href="<?= $result->url() ?>">
						<p>	
						<strong>
							<?= $result->title() ?>								
						</strong>
						</p>
							<?= strip_tags(kirbytext(Str::short($result->text()->value(), 250))) ?>
						</a>
		            </li>
				<?php } ?><?php endforeach ?>
	        </ul>
		<?php } ?>

		<?php if(!$query) {?>
			<main role="main">
				<article class="blog format_text">
				<?php echo kirbytext($page->text()) ?>
			
					<?php if($page->hasChildren()) {
			
					echo('<p>Next: <a class="path-link" href="' );
					echo ($page->children()->first()->url());
					echo('">');
					echo($page->children()->first()->title());
					echo(' > </a></p>');
			
					}
					else if($page->hasNextVisible()) {
			
					echo('<p>Next: <a class="path-link" href="' );
					echo ($page->next()->url());
					echo('">');
					echo($page->next()->title());
					echo(' > </a></p>');
			
					}
					else if($page->parent() && $page->parent()->hasNextVisible()) {
			
					echo('<p>Next: <a class="path-link" href="' );
					echo ($page->parent()->next()->url());
					echo('">');
					echo($page->parent()->next()->title());
					echo(' > </a></p>');
			
					}?>
	
					</div>
			
				</article>
			</main>
		<?php } ?>

		</div>

	</div>

<?php snippet('footer') ?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</div>