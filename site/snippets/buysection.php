<div class="icon-branded-section">
		<div class="container">
			<img  src="<?php echo url('assets/images/GraphicLogo-no-text.png') ?>" alt="">
			<div class="text"><?php echo $page->buyText() ?>
			<strong><?php echo $page->buyAmount() ?></strong>
			</div>
			<a href="<?php echo $page->storeURL() ?>">
				<button class="download-button">BUY NOW</button>
			</a>
		</div>
	</div>