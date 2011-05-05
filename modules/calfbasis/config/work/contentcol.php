<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 *  会展类
 */
return array(
         'contentcol'=> array(
             'basis'=>array(
                  'params'=>array(),
                  'values'=>'<script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=basis&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>',),
             'basisprocs'=>array(
                  'params'=>array(),
                  'values'=>'
                    <script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=basisprocs&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
                    <script>Azhai.onPages({"type":"js","js":["/media/js/basis.js?'.time().'"]});</script>
                    ',),
            'basisprocsadd'=>array(
                  'params'=>array(),
                  'values'=>'
                    <script>Azhai.onPages({"type":"ajax","ajax":"/ajax?sk=basisprocsadd&'.time().'","id":"contentcol","loadingid":"loadingIndicator"});</script>
                    <script>Azhai.onPages({"type":"js","js":["/media/js/basis.js?'.time().'"]});</script>
                  ',),
         
            )
 );
