<?php snippet('header'); ?>

<?= css('assets/css/tutorials.css?v=1') ?>

<?php s::start();

	$value = get('format');

	if($value == "mac")
		s::set('format', 'mac');
	else if($value == "ipad")
		s::set('format', 'ipad');
	else if($value == "iphone")
		s::set('format', 'iphone');
?>
