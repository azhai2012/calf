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
			 array('id'=>1,'mod_name'=>'cms','name' =>'CMS管理','url'=>'/admin/index/1',
			              'lists'=>array(
			                   array('id'=>'11','mod_name'=>'product','name'=>'商品管理','url'=>'/admin/product'),
				      	   array('id'=>'12','mod_name'=>'mod','name'=>'模块管理','url'=>'/admin/modelmanager'),
				      	   array('id'=>'12','mod_name'=>'news','name'=>'新闻管理','url'=>'/admin/news'),
				   	   array('id'=>'12','mod_name'=>'notice','name'=>'公告管理','url'=>'/admin/notice'),
					   array('id'=>'12','mod_name'=>'template','name'=>'模板管理','url'=>'/admin/template'),
					   array('id'=>'12','mod_name'=>'community','name'=>'社区管理','url'=>'/admin/community'),
				       ),				     
			     ) , 
			 array('id'=>2,'mod_name'=>'crm','name' =>'CRM管理','url'=>'/admin/index/2',
			                  'lists'=>array(
				           array('id'=>'21','mod_name'=>'customer','name'=>'客户管理','url'=>'/admin/customer'),
				      	   array('id'=>'22','mod_name'=>'odds','name'=>'机会管理','url'=>'/admin/odds'),
				     	   array('id'=>'23','mod_name'=>'task','name'=>'日程安排','url'=>'/admin/task'),
				      	   array('id'=>'24','mod_name'=>'order','name'=>'订单管理','url'=>'/admin/order'),
				      	   array('id'=>'25','mod_name'=>'funds','name'=>'款项管理','url'=>'/admin/funds'),
				      	   array('id'=>'26','mod_name'=>'cost','name'=>'费用管理','url'=>'/admin/cost'),
				     ),
			      ), 
		         array('id'=>3,'mod_name'=>'system','name' =>'系统管理','url'=>'/admin/system',
		                  'lists'=>array(
			           array('id'=>'31','mod_name'=>'premision','name'=>'权限模块','url'=>'#'),
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
