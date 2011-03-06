<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 *  销售模块
 */
return array(
         'contentcol'=> array(
              
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
    )
 );
