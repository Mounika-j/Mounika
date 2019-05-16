<?php $p = ( $page->depth() == 1 ) ? $page : $page->parents()->last(); ?>
<?php if(!isset($subpages)) $subpages = $p->children() ?>
<ul class="content1">
  <?php foreach($subpages->visible() AS $p): ?>
  <li class="depth-<?php echo $p->depth() ?>">
    <?php
    $addCls = '';
    if ($page->title() === $p->title()) {
    	$addCls = 'customCls';
    }

    ?>
    <a<?php echo ($p->isActive()) ? ' class="active '.$addCls.'"' : '' ?> href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>


    <?php
	if($p->hasChildren()) {
		$showChildren = $p->isActive();
		
		if($showChildren != true) {
			foreach($p->children() AS $child) {
				if($child->isActive()) {
					$showChildren = true;
					break;
				}
			}
		}
		
		if($showChildren)
			snippet('docs_menu', array('subpages' => $p->children()));
	}
    ?>
  </li>
  <?php endforeach ?>
</ul>