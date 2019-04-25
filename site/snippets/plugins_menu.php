<?php if(!isset($subpages)) $subpages = $site->find('plugins')->children() ?>
<ul>
  <?php foreach($subpages->visible() AS $p): ?>
  <li class="depth-<?php echo $p->depth() ?>">
    <a<?php echo ($p->isActive()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
    <?php if($p->showSubmenu() == "YES" && $p->hasChildren()): ?>
    <?php snippet('plugins_menu', array('subpages' => $p->children())) ?>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>