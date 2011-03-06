<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * 展会管理
 */

return array(      
    'menus'=>array(
               'meet'=>array(
                 'params'=>array('param'=>array('content'=>'m'),'len'=>4),
                 'values'=>'<script>Azhai.onPages({"type":"","id":"navside","content":\':m\'});</script>', 
                ),
                'meetnew'=>array(
                 'params'=>array('param'=>array('content'=>':m'),'len'=>4),
                 'values'=>'<script>Azhai.onPages({"type":"","id":"navside","content":\':m\'});</script>', 
                ),
                'meetedit'=>array(
                   'params'=>array('param'=>array('content'=>':m'),'len'=>4),
                   'values'=>'<script>Azhai.onPages({"type":"","id":"navside","content":\':m\'});</script>', 
                ),
      ),
);
