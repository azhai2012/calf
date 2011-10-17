<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-10-16 
 * @copyright 2011 
 *
 */
class Kohana_Calfdb_Admin_Home extends Kohana_Calfdb_Admin {

       /**
       * 
       */
       public function get_admin_home_array_data() {
           // TODO :
          $array_data = array(
			 array('id'=>1,'mod_name'=>'notice','name' =>'公告管理','url'=>'/admin/index/1',
			      ) , 
			 array('id'=>2,'mod_name'=>'news','name' =>'新闻管理','url'=>'/admin/index/2',
			      ) , 
			 array('id'=>3,'mod_name'=>'advertising','name' =>'广告管理','url'=>'/admin/index/3',
			                  'lists'=>array(
				           array('id'=>'31','mod_name'=>'advadd','name'=>'添加广告栏目','url'=>'/admin/index/31'),
				      	   array('id'=>'32','mod_name'=>'advlist','name'=>'广告列表','url'=>'/admin/index/32'),
				           ),
			      ), 
			 array('id'=>4,'mod_name'=>'shows','name' =>'商品展示管理','url'=>'/admin/index/4','lists'=>array(
			           array('mod_name'=>'showadd','name'=>'展示模块','url'=>'#'),
			      	   array('mod_name'=>'showlist','name'=>'展示列表','url'=>'#'),
			           ),
			       ) , 
	    );
           return $array_data;
       }

       /**
       * 
       */
       public function get_admin_home_adv_add_list_array_data() {
           // TODO :
             $array_data= array(
	          array('id'=>1,'name'=>'页面广告','content'=>'图片内容','isactive'=>'1',),
	          array('id'=>2,'name'=>'页面广告','content'=>'图片内容','isactive'=>'1',),
	          array('id'=>3,'name'=>'页面广告','content'=>'图片内容','isactive'=>'1',),
	          array('id'=>4,'name'=>'页面广告','content'=>'图片内容','isactive'=>'1',),
	          array('id'=>5,'name'=>'页面广告','content'=>'图片内容','isactive'=>'1',),
	          array('id'=>6,'name'=>'页面广告','content'=>'图片内容','isactive'=>'1',)
		  );
           return $array_data;
       }

       /**
       * 
       */
       public function get_admin_home_notice_list_array_data() {
           // TODO :
        $array_data = array(
		  array('id'=>1,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'N'), 
	          array('id'=>2,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>3,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>4,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>5,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>6,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 
		  array('id'=>7,'title' =>'网上试运行，期间所有商品大优惠！','url'=>'#','create_date'=>'2012-01-01','is_active'=>'Y'), 

		);
           return $array_data;
       }


       /**
       * 
       */
       public function get_admin_home_news_add_list_array_data() {
           // TODO :
        $array_data = array(
	         array('id'=>1,'name'=>'十一放假通知','url'=>'#','isactive'=>'1','date'=>'2011-01-10'),
	         array('id'=>2,'name'=>'十一放假通知','url'=>'#','isactive'=>'1','date'=>'2011-01-10'),
	         array('id'=>3,'name'=>'十一放假通知','url'=>'#','isactive'=>'1','date'=>'2011-01-10'),
	         array('id'=>4,'name'=>'十一放假通知','url'=>'#','isactive'=>'1','date'=>'2011-01-10'),
	         array('id'=>5,'name'=>'十一放假通知','url'=>'#','isactive'=>'1','date'=>'2011-01-10'),
	      );
           return $array_data;
       }

       /**
       * 
       */
       public function get_admin_home_adv_list_array_data() {
           // TODO :
        $array_data = array(
		    array('id' =>123334,'title'=>'页面广告','content'=>'图片','create_date'=>'2011-01-01','begin_date'=>'2011-01-01','end_date'=>'2011-02-01','active'=>1), 
		    array('id' =>123334,'title'=>'页面广告','content'=>'图片','create_date'=>'2011-01-01','begin_date'=>'2011-01-01','end_date'=>'2011-02-01','active'=>1), 
		    array('id' =>123334,'title'=>'页面广告','content'=>'图片','create_date'=>'2011-01-01','begin_date'=>'2011-01-01','end_date'=>'2011-02-01','active'=>0), 
		    array('id' =>123334,'title'=>'页面广告','content'=>'图片','create_date'=>'2011-01-01','begin_date'=>'2011-01-01','end_date'=>'2011-02-01','active'=>1), 
		    array('id' =>123334,'title'=>'页面广告','content'=>'图片','create_date'=>'2011-01-01','begin_date'=>'2011-01-01','end_date'=>'2011-02-01','active'=>0), 
		  );
           return $array_data;
       }


}
