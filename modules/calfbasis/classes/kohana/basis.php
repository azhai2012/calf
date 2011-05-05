<?php defined('SYSPATH') or die('No direct access allowed.');

/*
 *  基础设置模块
 *  2011-05-05 
 * 
 */

class Kohana_Basis  {
	
	public $_name;
	public $_data=array();
	
    public static function factory($name,array $data = NULL)
	{
		return new Kohana_Basis($name,$data);
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
	 * 获取菜单项
	 */
	
	public function get_menus($data = ''){

		$mods = '';
		
		switch ($this->_name) {
			
			
		    case "basis":{
				$mods = $this->ajax_get_basis_main();
			}break;

			case "basisprocs":{
				$flag = $this->_data['param']['flag'];
				$mods = ($flag==1)?$this->ajax_get_basis_page_procs_lists():$this->ajax_get_basis_procs_lists();
			}break;
			
			case "basisprocsadd":{
				$mods = $this->ajax_get_basis_procs_add();
			}break;
			
			
			
		}
		
		return $mods;
		
	}
	
	
	public function ajax_get_basis_main(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusz">';
		$result .='</i><span>基础设置</span></h3>';
		$result .='<table class="list"><thead><tr>列表</tr></thead>';
		$result .='<tbody>';
		$result .='<tr><td><div></div></td></tr></tbody></table>';
	    return $result;
	}
	
	public function ajax_get_basis_page_procs_lists(){
		
		$result ='';
		$arys = $this->_data['param'];
		
		$prepage = $arys['prepage'];
		
		$page = ($arys['page']<>0)?$arys['page']*$prepage-$prepage:0;
	    
		$findcontent =$arys['content'];
		$query = "select count(*) as ct from products where 1 ";
		
		$wherequery = '';
		if (!empty($findcontent))
		$wherequery .= " and  (product_name like '%$findcontent%' or product_code like '%$findcontent%') ";		
		

	     
		
		$modules= DB::query(Database::SELECT,$query.$wherequery,TRUE)
        ->as_object()
		->execute();
		
        $modules=$modules->as_array();
		
		$config = array(
		'total_items'       => $modules[0]->ct,
		'items_per_page'    => $prepage,
	    'ajaxfunc'          => 'Basis.getproc',
		'view'              => 'pagination/cusfloating',
		'auto_hide'         => TRUE,
		'first_page_in_url' => FALSE,
	    );
		
	    $pagination= Pagination::factory($config);
		$query= "select * from products where 1";
		$limit= " limit $page,$prepage";
		$modules= DB::query(Database::SELECT,$query.$wherequery.$limit,TRUE)

		->as_object()
		->execute();
		
		
		foreach($modules as $key => $value){
		 $result .=	'<tr>
		             <td>'.$value->product_id.'</td>
		             <td>'.$value->product_name.'</td>
		             <td>'.$value->product_spec.'</td>
		             <td>'.$value->product_unit.'</td>
		             <td>'.$value->product_origin.'</td>
		             </tr>';
		}
		$result .='
		<tr>
		 <td colspan=5>'.$pagination->render().'</td>
		</tr>
		';
		
		return $result;
	}
	
	public function ajax_get_basis_procs_lists(){
		
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=basisprocsadd"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>新建商品</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusp">';
		$result .='</i><span>商品设置</span></h3>';
		$result .='<table class="list">';
		$result .='<thead>
		             <tr><td colspan=5>商品列表</td></tr>
		             <tr>
		               <td colspan=5>查询商品:<input id="findmc" name="findmc" value="" /><input type="button" id="findbtn" name="findbtn" onclick="javascript:Basis.getproc(-1)" value="查询" /></td>
		             </tr>
		            <tr>
		            <th>编号</th> 
		            <th>商品名称</th> 
		            <th>规格</th> 
		            <th>单位</th> 
		            <th>生产企业</th>
		            </tr> 
		           </thead>';
		$result .= '<tbody>'.$this->ajax_get_basis_page_procs_lists().'</tbody>';
		$result .= '</table>';
	    return $result;
	}
	
	public function ajax_get_basis_procs_add(){
		 $result ='<div class="roles">';
		 $result .='<div class="contextual"></div>';
		 $result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menubasis">';
		 $result .='</i><span>商品设置- 添加</span></h3>';
		 $result .='<table class="list">';
		 $result .='<thead>
		             <th colspan=2 style="margin-bottom:10px;">添加内容</th>
		           </thead>';
		 $result .= '<tbody>
                       <tr><td style="width:100px">商品编码：</td><td><input id="productid" name="productid" value="" /></td></tr>
                       <tr><td>商品名称：</td><td><input id="productname" name="productname" value="" /></td></tr>
                       <tr><td>商品助记码：</td><td><input id="productcode" name="productcode" value="" /></td></tr>
                       <tr><td>规格：</td><td><input id="productspec" name="productsepc" value="" /></td></tr>
                       <tr><td>单位：</td><td><input id="productunit" name="productunit" value="" /></td></tr>
                       <tr><td>生产企业：</td><td><input id="productorgin" name="productorgin" value="" /></td></tr>
                       <tr><td>生产企业助记码：</td><td><input id="productorgin" name="productorgin" value="" /></td></tr>
                     </tbody>
		             </table>   
		 ';
		 $result .=' <div class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Basis.setProdinfo()" value="保存">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="">
    	             </label>
    	            </div>';
		 return $result;
	}
	
	 

}
