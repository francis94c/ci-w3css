<?php foreach ($menus as $menu) {?>
  <a href="<?=isset($menu["link"]) ? $menu["link"] : ""?>" class="w3-bar-item w3-button<?=" $item_class"?>">
    <?=isset($menu["icon"]) ? " <i class=\"fa {$menu["icon"]}\"></i> " : ""?><?=isset($menu["text"]) ? $menu["text"] : ""?>
  </a>
<?php }?>
