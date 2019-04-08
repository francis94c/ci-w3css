<table class="w3-table<?=isset($table_class) ? " $table_class" : ""?><?=isset($bordered) ? " w3-border" : ""?><?=isset($striped) ? " w3-striped" : ""?>">
  <tr class="<?=isset($class) ? $class : ""?>">
    <?php foreach($columns as $column) {?>
      <th><?=$column?></th>
    <?php }?>
  </tr>
