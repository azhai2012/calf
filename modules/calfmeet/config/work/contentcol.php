<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 *  会展类
 */
return array(
         'contentcol'=> array(
             
              'meet'=>array(
                  'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meet&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'meetnew'=>array(
                   'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetnew&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
              'meetedit'=>array(
                   'params'=>array('param'=>array('fl'=>':p')),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=meetview&fl=:p&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
    )
 );
