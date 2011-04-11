<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 *  会展类
 */
return array(
         'contentcol'=> array(
             
              'cms'=>array(
                  'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=cms&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),

              'cmsnews'=>array(
                  'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=cmsnews&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
            
              'cmsnewsadd'=>array(
                   'params'=>array(),
                  'values'=>'
                    <script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=cmsnewsadd&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
                    <script>Azhai.onPages({"type":"js","js":["/media/js/nicedit/nicEdit.js?'.time().'"]});</script>
                    <script>Azhai.onPages({"type":"js","js":["/media/js/cms.js?'.time().'"]});</script>
                    ',),
              'cmsnewsmodify'=>array(
                   'params'=>array('param'=>array('fl'=>':p')),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=cmsnewsmodify&fl=:p&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
    )
 );
