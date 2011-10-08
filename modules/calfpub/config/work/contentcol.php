<?php

return array(
         'contentcol'=> array(
            
              /**  -----------------------------------------------------------
               * 
               *   系统管理
               *   日期:2011-02-15  
               *               
               */ 

             'sys'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sys","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

             'sysrole'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysrole","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

             'sysroleview'=>array(
                  'params'=>array('param'=>array('fl'=>':p')),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysroleview&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              
            
              'sysrolenew'=>array(
                  'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysrolenew","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
 
             'sysuser'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysuser","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

             'sysusernew' =>array(
                   'params'=>array(), 
                   'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysusernew","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

              'sysusermodify' =>array(
                   'params'=>array('param'=>array('fl'=>':p')), 
                   'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysusermodify&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
                

             'default'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=build","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

           ),
 

)
?>