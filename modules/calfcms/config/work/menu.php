<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 * 展会管理
 */

return array(      
    'menus'=>array(
               'cms'=>array(
                 'params'=>array('param'=>array('content'=>'m'),'len'=>3),
                 'values'=>'<script>Azhai.onPages({"type":"","id":"navside","content":\':m\'});</script>', 
                ),
                'cmsnewsadd'=>array(
                 'params'=>array('param'=>array('content'=>':m'),'len'=>7),
                 'values'=>'<script>Azhai.onPages({"type":"","id":"navside","content":\':m\'});</script>', 
                ),
                'cmsnewsmodify'=>array(
                   'params'=>array('param'=>array('content'=>':m'),'len'=>7),
                   'values'=>'<script>Azhai.onPages({"type":"","id":"navside","content":\':m\'});</script>', 
                ),
      ),
);
