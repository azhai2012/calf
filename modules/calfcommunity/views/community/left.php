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
 <div class="left-extra"> <!-- begin left -->
    <div class="m topic"><div class="mt"><h2><?php echo $value['titles']['head_title']; ?></h2></div>
       <div class="mc">
            <table cellspacing="0" cellpadding="0" border="0">
                <tbody align="center">
                    <tr><th width="400px" class="tl">主题 / 回复</th>
                        <th width="100px">浏览</th>
                        <th width="100px">作者</th>
                        <th width="100px">商品分类</th>
                    </tr>
                  <?php foreach ($value['topic_lists'] as $sub_key => $sub_value): ?>
                    <tr>
                       <td class="ta-l"><div><a target="_blank" href="#"><?php echo $sub_value['title']; ?></a></div></td>
                       <td class="gray"><?php echo $sub_value['viewcount']; ?>/ <?php echo $sub_value['repetcount']; ?></td>
                       <td class="gray"><div><?php echo $sub_value['author']; ?></div></td>
                       <td class="blue"><a target="_blank" href="#"><?php echo $sub_value['about']; ?></a></td>
                     </tr>
                   <?php endforeach; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="m hots">
        <div class="mt"><h2><?php echo $value['titles']['product_title']; ?></h2></div>
        <div class="mc">
	     <ul>
	       <?php foreach ($value['product_lists'] as $h_key => $h_value): ?>
                <li><div class="p-img"><a href="#" target="_blank">
                <img height="100" width="100" src="<?php echo $h_value['img'] ?>"></a></div></li>
               <?php endforeach; ?>  
            </ul>
        </div>
    </div>
</div>

<?php endforeach; ?>