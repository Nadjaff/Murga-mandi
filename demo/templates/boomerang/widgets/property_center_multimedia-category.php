<?php

    $category_id = 9;

?> 

<?php if(isset(${"category_options_$category_id"}) && ${"category_options_count_$category_id"}>0): ?>
<h3 class="page-header"><?php echo ${"options_name_$category_id"} ?></h3>
<?php foreach(${"category_options_$category_id"} as $key=>$row): ?>
<?php if(!empty($row['option_value'])): ?>
    <?php echo _che($row['option_value']); ?>
    <br style="clear:both;" />
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

