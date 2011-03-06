<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 *  会展类
 */
return array(
         'contentcol'=> array(
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
              )
 );
