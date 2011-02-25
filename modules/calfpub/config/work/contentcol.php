<?php

return array(
         'contentcol'=> array(
             //管理类 
             'adr'=> array(
                 'params'=>array(),
                 'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adr","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
             'adrnew'=>array(
                 'params'=>array('p'),
                 'values'=>array('<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adrnew&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>'),),
              'adredit'=>array(
                 'params'=>array('param'=>array('fl'=>':p')),
                 'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adrview&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'adu'=>array(
                 'params'=>array(),
                 'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adu","id":"contentcol","loadingid":"loadingIndicator"});</script>
                          <script>Azhai.onPages({"type":"js","js":["/media/js/admin.js?'.time().'"]});</script>',),
              'adunew'=>array(
                 'params'=>array(),
                 'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=adunew","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

              'aduview'=>array(
                 'params'=>array('param'=>array('fl'=>':p')),
                 'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=aduview&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
               //会展类
              'meet'=>array(
                  'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meet&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'meetnew'=>array(
                   'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetnew&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'meetedit'=>array(
                   'params'=>array('param'=>array('fl'=>':p')),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetview&fl=:p&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              /*** ----------------------------------------
               * 客户管理
               */  
              'custmt'=>array(
                   'params'=>array(),
                   'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmeetjoin&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'custmtprodview'=>array(
                   'params'=>array('param'=>array('fl'=>':p')),
                   'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtprodview&fl=:p&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	         <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>',),
              'custmtview'=>array(
                   'params'=>array('param'=>array('fl'=>':p')),
                   'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtview&fl=:p&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	          <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>',),
              'custropose'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custropose&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	      	         
                             <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>',),
              'custorder'=>array(
                  'params'=>array('param'=>array('bdate'=>':p1','edate'=>':p2')), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtorder&bdate=:p1&edate=:p2&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
                                ',),
              'custmtcart'=>array(
                  'params'=>array('param'=>array('fl',':p')), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=custmtgettmpcart&fl=:p&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
	    	    	                              <script>Azhai.onPages({"type":"js","js":["/media/js/customers.js?'.time().'"]});</script>',),

              /**  -------------------------------------------
               * 供货商管理
               *  
               */
              'supm'=>array(
                  'params'=>array('param'=>array('fl',':p')), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supmt&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

              'supmview'=>array(
                  'params'=>array('param'=>array('fl',':p')), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supmview&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'supmnew'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supnew","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'suporder'=>array(
                  'params'=>array('param'=>array('fl',':p')), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suporder&fl=:p","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'suppropose'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suppropose","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'supkc'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supkc","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'suprk'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suprk","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'suptk'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=suptk","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'supxs'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=supxs","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              //基础设置
              'spsz'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=spsz","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'ddbb'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=ddbb","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              //医院部
              'hsp'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=hsp","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

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
 
             'sysuser'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=sysuser","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
      

             'default'=>array(
                  'params'=>array(), 
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=build","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

           ),
 

)
?>