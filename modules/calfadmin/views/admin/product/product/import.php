<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-11-10 
 * @copyright 2011 
 *
 */
?>
<table style="width:100%">
<tr><th style="width:200px;">目标字段</th>
<th>源字段</th>
</tr>	
<?php foreach ($db_data as $key => $value): ?>
<tr><td><?php echo $key ?></td>	
 <td align="center">
    <select>  
     <option></option>  
     <?php foreach ($array_data as $key => $value): ?>
          <option value=<?php echo $key ?>><?php echo $value ?></option>
     <?php endforeach;  ?> 	
    </select>
 </td>		
</tr>		
<?php endforeach;  ?>
</table>