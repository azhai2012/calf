<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-25 
 * @copyright 2011 
 *
 */
?>

<?php foreach ($array_data as $key => $value): ?>

 <div class="right-extra">
    <div class="m rank">
        <div class="mt">
            <h2><?php echo $value['titles']['head_title']; ?></h2>
        </div>
        <div class="mc">
            <ul>
                <?php foreach ($value['lists'] as $sub_key => $sub_value): ?>
                <li><span class="fore1 "><?php echo $sub_key+1; ?></span>
	        <a href="/commnunity/views/<?php echo $sub_value['id']; ?>" target="_blank"><?php echo $sub_value['title']; ?></a></li>
	        <?php endforeach; ?> 
            </ul>
        </div>
    </div>
</div>

<?php endforeach; ?>