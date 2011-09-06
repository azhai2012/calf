<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 *  展会模块
 *  2011-03-06 
 * 
 */

class Kohana_Meet  {
	
	public $_name;
	public $_data=array();
	
    public static function factory($name,array $data = NULL)
	{
		return new Kohana_Meet($name,$data);
	}
	
	public function __construct($name,array $data = NULL)
	{
       $this->_name = $name;
       $this->_data = $data; 
	}

	public function __toString()
	{

	}

	public function __get($key)
	{
	  return isset($this->$key) ? $this->$key : NULL;
	}

	public function __set($key, $value)
	{
	   $this->key = $value;
	}
	
	
	/*
	 * 获取供货商列表
	 */
	
	public function get_menus($data){
		
		$mods = '';
		switch ($this->_name) {
			
		    case "meet":{
				$mods = $this->ajax_get_setting_meet_list();
			}break;

			case "meetnew":{
				$mods = $this->ajax_get_setting_meet_new();
			}break;

			case "meetview":{
				$mods = $this->ajax_get_setting_meet_view($data);
			}break;

			case "meetadd":{
				$mods = $this->ajax_set_setting_meet($data,"INSERT");
			}break;

			case "meetdel":{
				$mods = $this->ajax_set_setting_meet($data,"DELETE");
			}break;

			case "meetedit":{
				$mods = $this->ajax_set_setting_meet($data,"UPDATE");
			}break;
			
		}
		
		return $mods;
		
	}
	
	
    public function ajax_set_setting_meet($array,$type="DELETE"){
		$result='';
		$array = explode(';',$array);
		switch ($type)
		{
			case "DELETE":{
				
				$id = $array[0];
				$result= DB::query(Database::DELETE,"DELETE FROM meets WHERE id=:id",TRUE)
				         ->param(':id',$id);
				        
				echo Kohana::debug((string) $result);  
				
				$result=$result->as_object()->execute();
			}break;
			
			case "INSERT":{
				
				$meetname = $array[1];
				$desc     = $array[2];
				$bt       = $array[3];
				$et       = $array[4];
				
				$result= DB::query(Database::INSERT,"INSERT INTO meets (meet_name,meet_begin_at,meet_end_at,meet_description) 
				                             VALUES (:meetname,:begin_at,:end_at,:desc)",TRUE)
				         ->param(':meetname',$meetname)
				         ->param(':begin_at',$bt)
				         ->param(':end_at',$et)
				         ->param(':desc',$desc)
				          ->as_object()
				         ->execute();
					
			}break;
			
			case "UPDATE":{
				
				$id=$array[0];
		        $name=$array[1];
				$desc=$array[2];
				$bt=$array[3];
				$et=$array[4];
				
				$result= DB::query(Database::UPDATE,"UPDATE meets SET meet_name=:name,
				         meet_description=:desc,meet_begin_at=:meet_begin_at,meet_end_at=:meet_end_at
				         WHERE id=:id",TRUE)
				         ->param(':id',$id)
				         ->param(':name',$name)
				         ->param(':desc',$desc)
				         ->param(':meet_begin_at',$bt)
				         ->param(':meet_end_at',$et);				         
				         
			  // echo Kohana::debug((string) $result);
			   $result = $result->as_object()->execute(); 
			           
			}break;
			
		}
		return json_encode($result);
	}
	
	public function ajax_get_setting_meet_list(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=meetnew"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新建展会</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusz">';
		$result .='</i><span>展会列表</span></h3>';
	  
		$modules= DB::query(Database::SELECT,"select meets.*,(select count(1) from suppliers where suppliers.meet_id=meets.id) as rs from meets",TRUE)->as_object()->execute();

		$result .='<table class="list"><thead><tr><th>会议名称</th><th>开始日期</th><th>结束日期</th><th>会议说明</th><th>参会家数</th><th></th></tr></thead>';
		$result .='<tbody>';
		$i=0;
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$checklock = ($value->active == 'N')?'icon-lock':'';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:200px" class="'.$mod.'"><span><a href="/home?sk=meetedit&fl='.$value->id.'">'.$value->meet_name.'</span></td>';
			$result.= '<td style="width:100px" class="'.$mod.'"><span><span>'.$value->meet_begin_at.'</span></td>';
			$result.= '<td style="width:100px" class="'.$mod.'"><span><span>'.$value->meet_end_at.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->meet_description.'</span></td>';
			$result.= '<td class="'.$mod.'"><span><span>'.$value->rs.'</span></td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons" >';
		    $result.= ($checklock==='')?'
		                       <a href="javascript:deleteMeetName('.$value->id.');">
                                 <span style="top:4px;" class="leftimg">
			                        <i class="img calfimage icon-del"></i>
			                     </span>
			                     <span>删除</span>':'
			                     
			                     <a href="javascript:void(0);">
                                 <span style="top:4px;" class="leftimg" title="已锁定无法删除">
			                        <i class="img calfimage icon-lock"></i>
			                     </span>
			          </td>';
			$result.= '</tr>';
			$i++;
		}
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}


	public function ajax_get_setting_meet_new(){
		$result ='<form action="/?sk=meet"  method="post" ><div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=meet">展会设置</a> <span class="ss"> >></span><span class="sf"> 新建展会 </span> </span></h3>
		          
		          <div class="info"></div>
		          <div class="topbox">
		           <div><label><div style="float:left"><span>展会名称：</span><span class="required">*</span></div><div class="ipt"><input name="meetname" id="meetname" value="" /></div></label></div><br>
		           <div class="clearfix"><label><div style="float:left"><span>展会说明：</span><span class="required">&nbsp;&nbsp;</span></div><div class="ipt" style="width:300px"><input style="width:300px;" name="description" id= "description" value="" /></div></label></div><br>
		           <div style="position: relative;width:500px">
                         <div class="datelabel">
		                   <span>展会开始：</span><span class="required">*</span>
                         </div>
		                 <div class="datebox">
                         <input type="text" class="inputtext" value="'.date('Y-m-d').'" id="start_time_intl_field" name="start_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)">
                        </div>
                   </div><br>       
		            <div style="position: relative;width:500px">
                         <div class="datelabel">
		                   <span>展会结束：</span><span class="required">*</span>
                         </div>
		                 <div class="datebox">
                         <input type="text" class="inputtext" value="'.date('Y-m-d').'" id="stop_time_intl_field" name="stop_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)">
                        </div>
                     </div>
                     <br> 
                   </div>';
		$result .='</div>';

		$result .='  <div class="btn">
	                   <input name="commit" type="button" value="创建" onclick="AddMeetName()"  />
	                 </div>
	               </div>';
		return $result;
	}
	
	
     public function ajax_get_setting_meet_view($id){

		$result  ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		
		$resultdb= DB::query(Database::SELECT,"SELECT * FROM meets WHERE id=:id",TRUE)
		                 ->param(':id',$id)
				         ->as_object()
				         ->execute();
        foreach ($resultdb as $key=>$value){
        	$_id  = $value->id;
        	$name = $value->meet_name;
        	$desc = $value->meet_description;
        	$bt   = $value->meet_begin_at;
        	$et   = $value->meet_end_at;
        	
        }
				         
		$result .='</i><span><a href="/?sk=meet">展会设置</a> <span class="ss"> >></span><span class="sf"> 更新展会 </span> </span></h3>
		          
		          <div class="info"></div>
		          <div class="topbox">
		           <div><label><div style="float:left"><span>展会名称：</span><span class="required">*</span></div><div class="ipt"><input name="meetname" id="meetname" value="'.$name.'" /></div></label></div><br>
		           <div><label><div style="float:left"><span>展会说明：</span><span class="required">&nbsp;&nbsp;</span></div><div class="ipt" style="width:300px"><input style="width:300px" name="description" id= "description" value="'.$desc.'" /></div></label></div><br>
		           <div style="position: relative;width:500px">
                         <div class="datelabel">
		                   <span>展会开始：</span><span class="required">*</span>
                         </div>
		                 <div class="datebox">
                         <input type="text" class="inputtext" value="'.$bt.'" id="start_time_intl_field" name="start_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)">
                        </div>
                   </div><br>       
		            <div style="position: relative;width:500px">
                         <div class="datelabel">
		                   <span>展会结束：</span><span class="required">*</span>
                         </div>
		                 <div class="datebox">
                         <input type="text" class="inputtext" value="'.$et.'" id="stop_time_intl_field" name="stop_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)">
                        </div>
                     </div>
                     <br> 
                   </div>';
		$result .='</div>';
		
	    $result .='<div class="btn">
	               <input name="commit" type="button" value="保存" onclick="EditMeetName('.$id.')"  />
	    </div></div>';
		return $result;
	}


	 

}
