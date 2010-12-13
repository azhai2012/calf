<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Supplier {

	
	private $picfilepath = '/home/azhai/uploads';//上传图片的路径

	/*
	 * 数据模块
	 */
	function ajax_Set_Model_Supplier($array,$type="DELETE"){
		$result='';
		if (is_array($array)){
		   $ary=$array;
		}
		else 
	  	  $array = explode(';',$array);
	  	  
		switch ($type)
		{
			case "DELETE":{

				$id = $array[0];
				$result= DB::query(Database::DELETE,"DELETE FROM suppliers WHERE id=:id",TRUE)
				->param(':id',$id);

				//echo Kohana::debug((string) $result);

				$result=$result->as_object()->execute();
			}break;
				
			case "INSERT":{

				$sup_id=$array[3];
				$product_id=$array[2];
				$meet_id=$array[1];
					
				$result= DB::query(Database::INSERT,"INSERT INTO suppliers (sup_id,product_id,meet_id)
				                             VALUES (:sup_id,:product_id,:meet_id)",TRUE)
				->param(':sup_id',$sup_id)
				->param(':product_id',$product_id)
				->param(':meet_id',$meet_id)
				->as_object()
				->execute();

			}break;
				
			case "UPDATE":{

				$id = $array[0];
				$sup_id=$array[1];
				$product_id=$array[2];
				$meet_id=$array[3];

				$result= DB::query(Database::UPDATE,"UPDATE suppliers SET sup_id=:sup_id,
				         product_id=:product_id,meet_id=:meet_id
				         WHERE id=:id",TRUE)
				->param(':id',$id)
				->param(':sup_id',$sup_id)
				->param(':product_id',$product_id)
				->param(':meet_id',$meet_id);
				 
				// echo Kohana::debug((string) $result);
				$result = $result->as_object()->execute();

			}break;
			
			case "UPDATEINFO":{
				$id = $ary["id"];
				$nr = $ary["cxnr"];
				$picname = $ary["picname"];
				$picsize = $ary["picsize"];
				$num = $ary["num"];
				$price = $ary["price"];
						
				$result= DB::query(Database::UPDATE,"UPDATE suppliers SET favorable=:favorable
				         ,picname=:picname,picsize=:picsize,limit_number=:num,price=:price
				         WHERE id=:id",TRUE)
				         ->param(':id',$id)
				         ->param(':favorable',$nr)
				         ->param(':picname',$picname)	
				         ->param(':picsize',$picsize)	
				         ->param(':num',$num)
				         ->param(':price',$price);	
							 
				// echo Kohana::debug((string) $result);
				$result = $result->as_object()->execute(); 
			}break;
				
		}
		return json_encode($result);
	}

    /*
     * 得到展会的列表 
     */
	function ajax_get_mods_sup_list($info){

		$result ='<div class="roles">';
		$result .='<div class="contextual">
		              <a href="/home?sk=supmnew"><span class="leftimg">
		              <i class="img calfimage icon-add"></i></span><span>添加商品</span></a>
		          
		          </div>
		          <div class="contextual">
		              <a href="/home?sk=supmview"><span class="leftimg">
		              <i class="img calfimage icon-view"></i></span><span>浏览展位</span></a>
		          </div>
		      
		          ';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusup">';
		$result .='</i><span>展会管理</span></h3>';

		$meetid= array_key_exists('meetid',$info)?$info['meetid']:'';
		 
		$sql= 'SELECT * FROM meets WHERE active="Y"';
	  
		$modules= DB::query(Database::SELECT,$sql,TRUE)->as_object()->execute();

		$selectmeets = '<select style="width:250px" onchange="javascript:Sups.getMeetIdList(this);" id="selectmeetid">';
		$et='';
		foreach($modules as $key => $value){

			if ($value->id === $meetid){
				$selectmeets .='<option selected value="'.$value->id.'" >'.$value->meet_name.'</option>';
				$et = $value->meet_end_at;
			}
			else {
				$selectmeets .='<option value="'.$value->id.'" >'.$value->meet_name.'</option>';
				if (empty($et)) $et = $value->meet_end_at;
			}

			$meetid = (!empty($meetid))?$meetid:$value->id;
		}

		$selectmeets .='</select>';


		$modules= DB::query(Database::SELECT,"
		              SELECT suppliers.id,products.product_name, product_spec,product_unit,
		                     product_origin,limit_number,price
                      FROM suppliers
                      INNER JOIN products ON suppliers.product_id = products.product_id
                      INNER JOIN meets ON suppliers.meet_id = meets.id 
                      WHERE sup_id=:sid and meet_id=:mid and active='Y'
                      ",TRUE)
		->param(':sid',$info['userid'])
		->param(':mid',$meetid)
		->as_object()
		->execute();


		 
		$result .='<table class="list"><thead>
		<tr><th colspan=7 style="background:#fff;font-weight:normal">选择参加的展会名称：'.$selectmeets.'</span></th><th style="background:#fff;font-weight:normal">展会结束日期:</th><th style="background:#fff;font-weight:normal">'.$et.'</th>
		<tr><th>序号</th><th>参会商品名称</th><th>规格</th><th>单位</th><th>生成企业</th><th>限购数量</th><th>参会单价</th><th>预订数量</th><th></th></tr></thead>';
		$result .='<tbody>';
		$i=1;

		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
			$result.= '<td  class="'.$mod.'"><span>'.$value->product_name.'</span></td>';
			$result.= '<td class="'.$mod.'"><span>'.$value->product_spec.'</span></td>';
			$result.= '<td align="center" class="'.$mod.'"><span>'.$value->product_unit.'</span></td>';
			$result.= '<td class="'.$mod.'"><span>'.$value->product_origin.'</span></td>';
			$nm = ($value->limit_number==0)?'不限':$value->limit_number;
	        $result.= '<td width=10px align="right" class="'.$mod.'"><span>'.$nm.'</span></td>';
		    $result.= '<td width=10px align="right" class="'.$mod.'"><span>'.$value->price.'</span></td>';
			$result.= '<td width=6px align="center" class="'.$mod.'"><span>0</span></td>';
			$result.= '<td id="td'.$value->id.'" class="'.$mod.' buttons" >
			              <a title="上传品种图片和促销信息" href="javascript:Sups.addProcPic('.$value->id.');">
                               <span style="top:4px;" class="leftimg">
			                      <i class="img calfimage icon-pic"></i>
			                   </span>
			                   <span>图片和促销</span>
			              </a>
			               <a title="删除该品种" href="javascript:Sups.deleteMeetProdName('.$value->id.');">
                               <span style="top:4px;" class="leftimg">
			                      <i class="img calfimage icon-del"></i>
			                   </span>
			                  
			              </a>
			          </td>';
			$result.= '</tr>';
			$i++;
		}
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}
 
	/*
	 * 选择参会的商品
	 */
	function ajax_get_select_proc_dialog($info){
		$result  ='';
		$result .='<h2 class="dialog_title"><span>选择商品</span></h2>';
		$result .='<div class="dialog_content" style="min-height:400px;" >';
		$modules= DB::query(Database::SELECT,"
		             SELECT * 
                     FROM products 
                     WHERE product_id not in (select product_id from suppliers where suppliers.meet_id=:meet_id and sup_id=:sup_id) 
                      ",TRUE)
		->param(':sup_id',$info['userid'])
		->param(':meet_id',$info['meetid']);
			
		//echo Kohana::debug((string) $modules);
			
		$modules=$modules->as_object()->execute();

		$result .='<table class="list" id="selectlist">
    	           <thead><th style="width:10px;"><input type="checkbox" id="allchecked" name="allchecked" onclick="javascript:Sups.Allchecked()" /></th><th>编号</th><th>商品名称</th><th>规格</th><th>单位</th><th>生产企业</th><th>包装</th></thead>
    	           <tbody>';
		if (count($modules)>0)
		{
			foreach ($modules as $key=>$value){
				$result .='<tr id="w'.$value->product_id.'">
    		            <td align="center"><input type="checkbox" name="'.$key.' id="'.$key.' value="" /></td>
                        <td>'.$value->product_id.'</td> 
    		            <td>'.$value->product_name.'</td> 
    		            <td>'.$value->product_spec.'</td>
    		            <td>'.$value->product_unit.'</td>
    		            <td>'.$value->product_origin.'</td>
    		            <td>'.$value->product_group.'</td>
    		            <td></td>
    		            <td style="display:none"><a href="javascript:Sups.delSelectProc(\'w'.$value->product_id.'\')">删除</a></td>
    		          </tr>';
			}
		}
		else
		$result .='<tr><td colspan=9  align="center"><h4 style="border:0">没有商品可供选择！商品可能已全部参展。</h4></td></tr>';

		$result .='</tbody>';
		$result .='</table>';
		$result .='</div>';
		$result .=' <div class="dialog_buttons clearfix">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="javascript:Sups.onSelect(0)" value="确定">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="Sups.closedialog()">
    	             </label>
    	            </div>';
		return $result;
	}

	
	/*
	 * 上传促销和图片信息
	 */
	function ajax_get_select_upload_product_picture_dialog($info){
		$result  ='';
		$modules= DB::query(Database::SELECT,"
		              SELECT suppliers.id,suppliers.product_id,products.product_name, product_spec,product_unit,
		                     product_origin,suppliers.favorable,suppliers.limit_number,suppliers.price
                      FROM suppliers
                      INNER JOIN products ON suppliers.product_id = products.product_id
                      INNER JOIN meets ON suppliers.meet_id = meets.id 
                      WHERE suppliers.id =:pid and active='Y'
                      ",TRUE)
		->param(':pid',$info['id']);

		// echo Kohana::debug((string) $modules);

		$modules=$modules->as_object()->execute();

		foreach($modules as $key => $value){
			$id     = $value->id;
			$pid    = 'p'.$value->product_id;
			$spname = $value->product_name;
			$cdname = $value->product_origin;
			$spec   = $value->product_spec;
			$cx     = $value->favorable;
			$num    = $value->limit_number;
			$price  = $value->price;
		}
		 
		$result .='<h2 class="dialog_title"><span>上传产品图片</span></h2>';
		$result .='<div class="dialog_content" style="padding-top:30px;padding-left:20px;" >';
		$result .='<form name="form" action="" method="POST" enctype="multipart/form-data"> ';
		$result .='<table style="border:0;margin-bottom:20px;" class="list" id="selectlist">
    	           <tbody>';
		$result .='<tr>
    	                <td style="width:80px">商品名称：</td><td>
    	                <input type="hidden" id="supid" name="supid" value="'.$id.'">
    	                <input type="hidden" id="pid" name="pid" value="'.$pid.'">
    	                <input type="hidden" id="picname" name="picname" value="">
    	                <input type="hidden" id="picsize" name="picsize" value="">
    	                <span>'.$spname.'</span>
    	                </td></tr> 
    		            <tr><td>生产企业：</td><td><span>'.$cdname.'</span></td></tr> 
    		            <tr><td>规格：</td><td><span>'.$spec.'</span></td></tr> 
    		            <tr><td>限购数量：</td><td><input name="limit_num" id="limit_num" title="限制每户限购的数量" value='.$num.' /><span>(每家最多购进数量,0为不限制)</span></td></tr> 
    		            <tr><td>展会单价：</td><td><input name="price" id="price"  title="成交单价已实际开票价为准" value='.$price.' /></td></tr> 
    		            <tr><td colspan=2>
    		                促销信息：<div class="Sups_InputShadow"> <textarea class="Sups_TextArea" id="supstextarea">'.$cx.'</textarea></div></td>
    		            </tr>'; 
		$result .='</tbody>';
		$result .='</table>';
		$result .='<div style="margin:0px 0px 30px 0px">1、选择待上传图片：<span><input id="fileToUpload" type="file" size=40 name="fileToUpload" >
    		            <br><br>2、选定图片后，<button class="button" id="buttonUpload" onclick="return Sups.ajaxFileUpload();">上传图片</button>
    		            <span id="uploadinfo"></span></div>';
		$result .='</form>';
		$result .='</div>';
		$result .=' <div class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Sups.setSupProdinfo()" value="确定">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="Sups.closedialog()">
    	             </label>
    	            </div>';
		return $result;
	}


	/*
	 * 
	 */
	function ajax_get_mods_sup_new(){
		$result  ='';

		$resultdb= DB::query(Database::SELECT,"SELECT * FROM meets WHERE active='Y'",TRUE)
		->as_object()
		->execute();
		 
		$meets = '<select style="width:330px;" id="selectmeet" onchange="Sups.clearList()">';
		foreach ($resultdb as $key=>$value){
			$meets.= '<option value="'.$value->id.'">'.$value->meet_name.'</option>';
		}
		$meets.='</select>';

		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menuadr">';
		$result .='</i><span><a href="/?sk=meet">展会管理</a> <span class="ss"> >></span><span class="sf"> 添加商品 </span> </span></h3>
		          <div class="info"></div>
		          <div class="topbox">
		           <div><label><span>参会名称：</span><span class="required">*</span><span>'.$meets.'</span></label></div>
		           <div><label>
		              <div style="float:left"><span>选择商品：</span><span class="required">*</span></div>
		              <div style="float:left;width:320px;background:#fff;" class="ipt">
		              <input style="width:290px;" name="product" id= "product" onkeydown="addprodkey();" value="""/>
		              <a class="spipt" style="margin:0;padding:0;width:20px;height:16px;float:right;" onclick="Sups.addprod();"></a>
		              </div><br>
		              </label>
		           </div>';
		$result .='</div>';


		$result .='<div>
		           <table class="list" id="meetlist"><thead>
		             <tr><th>编号</th><th>参会商品名称</th><th>规格</th><th>单位</th><th>生产企业</th><th>包装<th><th></th></tr></thead>';
		$result .='<tbody>';
		$result .=' </tbody>
                    </table>';
		$result .='</div>';
		$result .='<div class="btn">
	               <input name="commit" type="button" value="保存" onclick="Sups.AddSupProcs()"  />
	    </div></div>';
		return $result;
	}
	
	
	function ajax_get_setting_suporder_list($info){

	    $result  ='';

		$resultdb= DB::query(Database::SELECT,"SELECT * FROM meets WHERE 1=1", TRUE)
		->as_object()
		->execute();

		$meetid= array_key_exists('meetid',$info)?$info['meetid']:'';
	
		$selectmeets = '<select style="width:250px" onchange="javascript:Sups.orderList(this);" id="selectmeetid">';
		foreach($resultdb as $key => $value){
          
			if ($value->id === $meetid){
				$selectmeets .='<option selected value="'.$value->id.'" >'.$value->meet_name.'</option>';
			}
			else {
				$selectmeets .='<option value="'.$value->id.'" >'.$value->meet_name.'</option>';
			}

			$meetid = (!empty($meetid))?$meetid:$value->id;
		}

		$selectmeets .='</select>';

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=suporder&fl=ex"><span class="leftimg"><i class="img calfimage icon-ex"></i></span><span>导出</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusup">';
		$result .='</i><span>展会订单</span></h3>';
		
		$result .=' <div class="info"></div>
		          <div class="topbox">
		           <div><label><span>展会名称：</span><span>'.$selectmeets.'</span></label></div>
		           <div><label>
		              <div style="float:left"><span>查询商品：</span></div>
		              <div style="float:left;width:320px;background:#fff;" class="ipt">
		              <input style="width:290px;" name="product" id= "product" onkeydown="Sups.findprodkey();" value="""/>
		                 <a class="spipt" style="margin:0;padding:0;width:20px;height:16px;float:right;" onclick="Sups.findprod();"></a>
		              </div><br>
		              </label>
		           </div>';
		$result .='</div>';

		$modules= DB::query(Database::SELECT,"
		              SELECT *
                      FROM suporders
                      INNER JOIN products ON suporders.prod_id = products.product_id
                      INNER JOIN meets ON suporders.meet_id = meets.id 
                      WHERE suporders.sup_id =:sid and suporders.meet_id=:mid
                      ",TRUE)
		->param(':sid',$info['userid'])
		->param(':mid',$meetid);
		
		//echo Kohana::debug((string) $modules);

		$modules=$modules->as_object()->execute();
		
		$result .='<div>
		           <table class="list" id="meetlist"><thead>
		             <tr><th>序号</th><th>订单日期</th><th>参会商品名称</th><th>规格</th>
		             <th>单位</th><th>生产企业</th><th>数量</th><th>单价</th>
		             <th>金额</th></tr></thead>';
		$result .='<tbody>';
		$i=0;
		$amount = 0;
		foreach($modules as $key => $value){
			$amount = $amount+ (float)$value->amount;
			$i=$i+1;
			$result .='<tr>';
			$result .='<td>'.$i.'</td>';
			$result .='<td>'.$value->order_at.'</td>';
			$result .='<td>'.$value->product_name.'</td>';
			$result .='<td>'.$value->product_spec.'</td>';
			$result .='<td>'.$value->product_unit.'</td>';
			$result .='<td>'.$value->product_origin.'</td>';
			$result .='<td>'.$value->num.'</td>';
			$result .='<td>'.$value->price.'</td>';
			$result .='<td align="right">'.$value->amount.'</td>';
			$result .='</tr>';
		}
		if ($amount=== 0){
			$result .='<tr><td align="center" style="font-size:14px;" colspan=8 >没有记录！</td></tr>';
		}
		$result .=' </tbody>';
		$result .='<tfoot>';
		$result .='<tr><td class="even" colspan=8>合计:</td><td align="right" class="even">'.$amount.'</td></tr>';
		$result .='</tfoot>';
		$result .='</table>';
		$result .='</div>';
		$result .='<div class="btn">
	  
	    </div></div>';
		return $result;	
		
	}
	

	/*
	 * 上传图片
	 */
	function ajax_upload_file($obj){
		$error = "";
		$msg = "";
		$fileElementName = 'fileToUpload';
		if(!empty($_FILES[$fileElementName]['error']))
		{
			switch($_FILES[$fileElementName]['error'])
			{

				case '1':
					$error = '上传文件超过了php.ini 中upload_max_filesize选项的值';
					break;
				case '2':
					$error = '上传文件超过了HTML表单中MAX_FILE_SIZE选项指定的值';
					break;
				case '3':
					$error = '文件只被部分上传';
					break;
				case '4':
					$error = '没有文件被上传.';
					break;

				case '6':
					$error = 'Missing a temporary folder';
					break;
				case '7':
					$error = 'Failed to write file to disk';
					break;
				case '8':
					$error = 'File upload stopped by extension';
					break;
				case '999':
				default:
					$error = 'No error code avaiable';
			}
		}elseif(empty($_FILES['fileToUpload']['tmp_name']) || $_FILES['fileToUpload']['tmp_name'] == 'none')
		{
			$error = '没有文件上传..';
		}else
		{
			$filename= $_FILES['fileToUpload']['name'];
			$tmp=explode(".",$filename);
			$filename =$obj.".".end($tmp);
			
			$filepath=rtrim($this->picfilepath, '/').'/'.$filename;
			
			$tmpFileName = $_FILES['fileToUpload']['tmp_name'];
			
		    $msg .= '"FileName":"'. $filename .'","FileSize":"'. @filesize($tmpFileName).'"';
			
			$return = @move_uploaded_file($tmpFileName, $filepath);		 
			
			@unlink($_FILES['fileToUpload']);
			
		}
		return '{"error":"'.$error.'","msg":{'.$msg.'}}';
	}



}
