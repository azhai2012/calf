<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Customer {


	function get_costomers($modname,$params = array()){
		 
		$mods= '';
		$users = $params['users'];
		$param = $params['param'];
		
		switch ($modname){

			case "cus":{
				$mods = $this->ajax_get_mods_cus_main();

			}break;

			case "custmeetjoin":{

				$mods = $this->ajax_get_mods_cus_list();

			}break;

			case "custmtprodview":{
				$ary1 = explode(',',$param['params']);
				$ary= array('userid'=>$users['userid'],'username'=>$users['username'],
				            'meetid'=>$ary1[0],'supid'=>$ary1[1],'prodid'=>$ary1[2]);
				$mods = $this->ajax_get_mods_cus_prod_view_list($ary);

			}break;

			case "custmtview":{
				$ary1 = explode(',',$param['params']);
				$ary= array('userid'=>$users['userid'],'meetid'=>$ary1[0],'supid'=>$ary1[1],'username'=>$users['username']);
				$mods = $this->ajax_get_mods_cus_view_list($ary);

			}break;


			case "custaddtotmpcart":{
				$ary = array('userid'=>$users['userid'],'supid'=>$users['supid'],
				             'meetid'=>$param['meetid'],'pid'=>$param['pid'],
				             'num'=>$param['num'],'price'=>$param['price']);
				//if ($this->isie()) {
				$mods = $this->ajax_Set_Model_Customer($ary,"TMPDBCART");
				//}
				//else {
				//	$this->template = $this->cust->ajax_Set_Model_Customer($ary,"TMPDBCART");
				//}
			}break;

			case "custupdtmpcart":{
				$ary = array('userid'=>$users['userid'],'supid'=>$users['supid'],'meetid'=>$param['meetid'],
				        'pid'=>$param['pid'],'num'=>$param['num'],'id'=>$param['id']);
				//if ($this->isie()) {
				$mods = $this->ajax_Set_Model_Customer($ary,"UPTTMPDBCART");
				//}else {
				//	$this->template = $this->cust->ajax_Set_Model_Customer($ary,"UPTTMPDBCART");
				//}
			}break;

			case "custdeltmpcart":{
				$ary = array('userid'=>$users['userid'],'supid'=>$users['supid'],'meetid'=>$param['meetid'],
				$param['pid']=>$prodid,'num'=>$param['num']);
				//if ($this->isie()) {
				$mods = $this->ajax_Set_Model_Customer($ary,"DELTMPDBCART");
				//}else {
				//	$this->template = $this->cust->ajax_Set_Model_Customer($ary,"DELTMPDBCART");
				//}
					
			}break;

			case "custtmptocart":{

				$ary = array('userid'=>$users['userid']);
				//if ($this->isie()) {
				$mods = $this->ajax_Set_Model_Customer($ary,"INSERTDBCART");
				//}
				//else
				//{
				//	$this->template = $this->cust->ajax_Set_Model_Customer($ary,"INSERTDBCART");
				//}
					
			}break;

			case "custropose":{
				$mods = $this->ajax_get_mods_cus_ropose(array('userid'=>$users['userid']));
			}break;

			case "addropose":{
				$mods = $this->ajax_get_mods_cus_add_ropose(array('userid'=>$users['userid']));
			}break;

			case "custaddropose":{
					
				$ary = array('userid'=>$users['userid'],'content'=>$param['content']);
				$mods = $this->ajax_Set_Model_Customer($ary,"INSTERROPOSE");
					
			}break;

			case "custmtgettmpcart":{

				$mods = $this->ajax_get_mods_cus_tmp_cart(array('userid'=>$users['userid'],'meetid'=>$param['meetid']));
					
			}break;

			case "custmtorder":{

				$mods = $this->ajax_get_mods_customer_meet_cart_list($users['userid'],$param['bdate'],$param['edate']);

			}break;
		}
		return $mods;
	}

	/* -----------------------------
	 *  写入数据库
	 */
	function set_tmp_db($userid,$supid,$meetid,$productid,$num) {

		$result = DB::query(Database::SELECT,"SELECT count(1) as ct FROM tmpcart
		              WHERE user_id=:userid and prod_id=:pid and meet_id=:meetid and sup_id=:sup_id",TRUE)
		->param(':userid',$userid)
		->param(':pid',$productid)
		->param(':meetid',$meetid)
		->param(':sup_id',$supid);
		echo Kohana::debug((string)$result);
		$result=$result->as_object()
		->execute();

		$result = $result->as_array();
		$ct = $result[0]->ct;
		if ($ct>0){
		 $result= DB::query(Database::UPDATE,"
		  UPDATE tmpcart SET num=num+:num WHERE user_id=:userid and prod_id=:pid and meet_id=:mid and sup_id=:sid",TRUE)
		 ->param(":userid",$userid)
		 ->param(":pid",$productid)
		 ->param(":mid",$meetid)
		 ->param(":sid",$supid)
		 ->param(":num",$num);
		 echo Kohana::debug((string)$result);
		 $result=$result->as_object()
		 ->execute();
		}
		else
		{
			$result= DB::query(Database::INSERT,"
		    INSERT INTO tmpcart (user_id,prod_id,meet_id,sup_id,num) VALUES (:userid,:pid,:mid,:sid,:num) ",TRUE)
			->param(":userid",$userid)
			->param(":pid",$productid)
			->param(":mid",$meetid)
			->param(":sid",$supid)
			->param(":num",$num);
			echo Kohana::debug((string)$result);
			$result=$result->as_object()
			->execute();
		}

		return  $result;
	}

	function set_update_tmp_num($num,$id) {

		$result= DB::query(Database::UPDATE,"UPDATE tmpcart SET num=:num
		         WHERE id=:id",TRUE)
		->param(":id",$id)
		->param(":num",$num);
		// echo Kohana::debug((string)$result);
		 
		$result=$result->as_object()->execute();

		return  $result;
	}

	function set_delete_tmp($userid,$supid,$meetid,$productid,$num) {

		$result= DB::query(Database::DELETE,"DELETE FROM tmpcart
		                    WHERE user_id=:userid and prod_id=:pid and meet_id=:mid and sup_id=:sid")
		->param(":userid",$userid)
		->param(":pid",$productid)
		->param(":mid",$meetid)
		->param(":sid",$supid);
		// echo Kohana::debug((string)$result);
		$result= $result->as_object()->execute();

		return  $result;
	}

	function set_tmp_db_to_cart($userid){

		$no= $this->get_order_no();
		 
		$sql ="INSERT INTO suporders (number,cus_id,sup_id,prod_id,num,meet_id,price,order_at)
                     SELECT '".$no."' as n,tmpcart.user_id,tmpcart.sup_id,tmpcart.prod_id,tmpcart.num,tmpcart.meet_id,price,'".date('Y-m-d H:i')."' as d 
                      FROM tmpcart inner join suppliers on suppliers.meet_id=tmpcart.meet_id
                           and tmpcart.sup_id=suppliers.sup_id and suppliers.product_id=tmpcart.prod_id";

		$result = DB::query(Database::INSERT,$sql,true);
		// echo Kohana::debug((string)$result);
		$result=$result->as_object()
		->execute();

		if ($result[1]>0)
		$result= DB::query(Database::DELETE,"DELETE FROM tmpcart WHERE user_id=:userid",TRUE)
		->param(":userid",$userid)
		->as_object()
		->execute();


		return  $result;
	}

	/* -------------------------------------
	 *  写入cookie
	 */
	function set_tmp_cookie($supid,$meetid,$productid,$num) {

		$t01= $meetid.'|'.$productid.'|'.$supid;
		$isexists = array_key_exists('meetcart', $_COOKIE);
		if ($isexists) {
			$b = Cookie::get('meetcart');
			$pet =(array)json_decode($b);
			$result=false;
			 
			foreach ($pet as $k=>$v) {
				if ($k == $t01) {
					$pet[$k] = (int)$v+(int)$num;
					$result=true;
					break;
				}
			}
			if (!$result) {
				if (count($pet)>250) {
					return '<span style="color:red">添加失败!(单笔订单最大250条,请先结算后接着订货）</span>';
				}
				$pet[$t01]= $num;
			}
			$a = json_encode($pet);
			Cookie::set('meetcart',$a);
			return '添加成功';
		}
		else {
			$t[$t01]=$num;
			$a =json_encode($t);
			Cookie::set('meetcart',$a);
			return '添加成功';
		}
	}

	function set_delete_tmp_cookie($supid,$meetid,$productid){
		$isexists = array_key_exists('meetcart', $_COOKIE);

		if ($isexists) {
			$b = Cookie::get('meetcart');
			$pet =(array)json_decode($b);
			 
			$tt = $meetid.'|'.$productid.'|'.$supid;

			$result=false;
			foreach ($pet as $k=>$v) {
				if ($k === $tt) {
					unset($pet[$k]);
					$result=true;
					break;
				}
			}

			$a = json_encode($pet);
			Cookie::set('meetcart',$a);
			return '1';
		}
	}

	function checkcart($cusid,$supid,$prodid,$meetid){
		$db = DB::query(Database::SELECT,"SELECT count(1) as ct FROM suporders
            	                 WHERE cus_id=:cusid and prod_id=:pid and meet_id=:meetid",TRUE)
		->param(':cusid',$cusid)
		->param(':pid',$prodid)
		->param(':meetid',$meetid);
		$db=$db->as_object()->execute();
		$conut='';
		foreach ($db as $key=>$value){
			$conut = $value->ct;
		}
		$conut = ($conut>0);
		return $conut;

	}

	function get_order_no(){
		$sql  = 'UPDATE  meetordernuber set
                             ordernumber=case when at=:dt then ordernumber+1 else 1 end,
                             at=:dt';
		$resultdb = DB::query(Database::UPDATE,$sql,true)
		->param(':dt',date('Ymd'))
		->as_object()
		->execute();
		 
		$sql = 'SELECT  at,ordernumber FROM meetordernuber';
		$resultdb = DB::query(Database::SELECT,$sql,true)
		->as_object()
		->execute();
		$no = '';
		foreach ($resultdb as $key => $value){
			$no = $value->at.str_pad($value->ordernumber,4,"0",STR_PAD_LEFT);
			//$no = date('Ymd').sprintf('%04d',$value->ordernumber);
		}

		return $no;
	}

	function set_cookie_to_cart($cusid){
		 
		$isexists = array_key_exists('meetcart', $_COOKIE);
		if ($isexists) {
			 
			$b = Cookie::get('meetcart');
			$pet =(array)json_decode($b);
			$no= $this->get_order_no();
			$sql  = '';
			foreach ($pet as $k=>$v) {
				 
				$ary = explode('|',$k);
				 
				$sql= "SELECT price FROM suppliers
                      WHERE  meet_id=:meetid 
                         and sup_id=:supid 
                         and product_id=:prod_id";

				$resultdb = DB::query(Database::SELECT,$sql,true)
				->param(':supid',$ary[2])
				->param(':prod_id',$ary[1])
				->param(':meetid',$ary[0])
				->as_object()
				->execute();
				$price=0;
				foreach ($resultdb as $key=>$value){
					$price= $value->price;
				}
				 

				 
				$sql ="INSERT INTO suporders (number,cus_id,sup_id,prod_id,num,meet_id,price,order_at) values
                      (:number,:cusid,:supid,:prod_id,:num,:meet_id,:price,:order_at)";

				$result = DB::query(Database::INSERT,$sql,true)
				->param(':number',$no)
				->param(':cusid',$cusid)
				->param(':price',$price)
				->param(':supid',$ary[2])
				->param(':prod_id',$ary[1])
				->param(':num',(int)$v)
				->param(':meet_id',$ary[0])
				->param(':order_at',date('Y-m-d H:i'))
				->as_object()
				->execute();

			}
		}

		if ($result > 0)
		Cookie::set('meetcart','');

		$sql = $result;

		return $sql;
	}

	function set_update_tmp_num_cookie($supid,$meetid,$productid,$num){
		$isexists = array_key_exists('meetcart', $_COOKIE);
		if ($isexists) {
			$b = Cookie::get('meetcart');
			$pet =(array)json_decode($b);

			$result=false;
			$t01=$meetid.'|'.$productid.'|'.$supid;
			foreach ($pet as $k=>$v) {
				if ($k == $t01) {
					$pet[$k] = (int)$num;
					$result=true;
					break;
				}
			}

			$a = json_encode($pet);
			Cookie::set('meetcart',$a);
			return '1';
		}
	}

	function get_tmp_db($userid,$meetid){
		$arys=array();

		$db = DB::query(Database::SELECT,"SELECT suppliers.sup_id AS sid, suppliers.meet_id, suppliers.price,
      	                         suppliers.favorable, suppliers.picname, products. * , 
      	                         tmpcart.id, tmpcart.num
      	                         
                                FROM tmpcart
                                INNER JOIN suppliers ON suppliers.product_id = tmpcart.prod_id
                                INNER JOIN products ON suppliers.product_id = products.product_id
                                WHERE tmpcart.user_id =:userid
                                      AND tmpcart.meet_id = :meetid ",TRUE)
		->param(':userid',$userid)
		->param(':meetid',$meetid);
		 
		//   echo Kohana::debug((string) $db);
		 
		$db=$db->as_object()->execute();
		 
		$arys= $db->as_array();
		// print_r($arys);

		return $arys;

		 
	}

	function get_tmp_cookie() {
		 
		$isexists = array_key_exists('meetcart', $_COOKIE);
		$pet='';
		$arys=array();
		if ($isexists) {
			$b = Cookie::get('meetcart');
			$pet =(array)json_decode($b);
			 

			 
			$ii=0;
			foreach ($pet as $key => $value){
				$t = explode('|',$key);

				$meetid = $t[0];
				$prodid = $t[1];

				$num = $value;
				$db = DB::query(Database::SELECT,"SELECT suppliers.sup_id as sid,suppliers.meet_id,suppliers.price,suppliers.favorable,suppliers.picname
            	                 ,products.*,".$num." as num,'0' as id
            	                 FROM suppliers INNER JOIN 
            	                 products ON suppliers.product_id = products.product_id
            	                 WHERE suppliers.product_id=:pid and meet_id=:meetid",TRUE)
				->param(':pid',$prodid)
				->param(':meetid',$meetid);
				 
				// echo Kohana::debug((string) $db);
				 
				$db=$db->as_object()->execute();

				$arys[$ii]= $db->as_array();
				$ii=$ii+1;
				//foreach ($db as $key=>$value){
				//   $arys[][$key]=$value;
				//};
				 
			}

		}
		return $arys;
	}

	function set_insert_repose($userid,$content){

		$sql  = 'INSERT INTO roposes (user_id,create_at,content)
      	         VALUES (:user_id,:create_at,:content) ';
		 
		$resultdb = DB::query(Database::INSERT,$sql,true)
		->param(':create_at',date('Y-m-d H:i'))
		->param(':content',$content)
		->param(':user_id',$userid);
		// echo Kohana::debug((string) $resultdb);

		$resultdb = $resultdb->execute();

		return $resultdb[1];
	}

	/*
	 * 数据模块
	 */
	function ajax_Set_Model_Customer($array,$type="DELETE"){
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
				

			/*------------------------------------------------------------------
			 *   写入数据库的订单
			 */
			case "TMPDBCART":{
				$userid= $ary['userid'];
				$supid = $ary['supid'];
				$meet_id= $ary['meetid'];
				$product_id= $ary['pid'];
				$num = $ary['num'];
				$result =array('msg'=>$this->set_tmp_db($userid,$supid,$meet_id,$product_id,$num));

			}break;
				
			case "UPTTMPDBCART":{
				$id = $ary['id'];
				$num = $ary['num'];
				$result =array('msg'=>$this->set_update_tmp_num($num,$id));

			}break;
				
			case "DELTMPDBCART":{
				$userid= $ary['userid'];
				$supid = $ary['supid'];
				$meet_id= $ary['meetid'];
				$product_id= $ary['pid'];
				$num = $ary['num'];
				$result =array('msg'=>$this->set_delete_tmp($userid,$supid,$meet_id,$product_id,$num));

			}break;
				
			case "INSERTDBCART":{
				$cusid=$ary['userid'];
				$sql = $this->set_tmp_db_to_cart($cusid);
				$result =array('msg'=>$sql);
			}break;
				
			/* ------------------------------------------------------------
			 *  写入COOKIE 的订单
			 */
			case "TMPCART":{
				$supid = $ary['supid'];
				$meet_id= $ary['meetid'];
				$product_id= $ary['pid'];
				$num = $ary['num'];
				$result =array('msg'=>$this->set_tmp_cookie($supid,$meet_id,$product_id,$num));
				 
			}break;
				
				
			case "UPTTMPCART":{
				$supid = $ary['supid'];
				$meet_id= $ary['meetid'];
				$product_id= $ary['pid'];
				$num = $ary['num'];
				$result =array('msg'=>$this->set_update_tmp_num_cookie($supid,$meet_id,$product_id,$num));
				 
			}break;
				
			case "DELTMPCART":{

				$supid = $ary['supid'];
				$meet_id= $ary['meetid'];
				$product_id= $ary['pid'];
				$result =array('msg'=>$this->set_delete_tmp_cookie($supid,$meet_id,$product_id));
				 
			}break;
				
			case "INSERTCART":{
				$cusid=$ary['userid'];
				$sql = $this->set_cookie_to_cart($cusid);
				$result =array('msg'=>$sql);
			}break;
				
				
				
			case "INSTERROPOSE":{
				$userid = $ary['userid'];
				$content = $ary['content'];
				$result = array('msg'=>$this->set_insert_repose($userid,$content));
			}break;
				

		}
		return json_encode($result);
	}

	function ajax_get_mods_cus_main(){
		 
		$result  ='';

		$modules= DB::query(Database::SELECT,"
		              SELECT count(sup_id) as ct,sum(pcount) as pzs,sum(amount) as je
		              FROM 
		                (SELECT sup_id,meet_id,count(product_id) as pcount,(select round(sum(num*price),2) as je 
		                        from suporders b where b.sup_id=suppliers.sup_id) as amount 
		                 FROM suppliers 
		                 WHERE suppliers.price>0
		                 GROUP BY sup_id,meet_id) a
		                 
                      INNER JOIN users ON a.sup_id = users.userid
                      INNER JOIN meets ON a.meet_id = meets.id
                      WHERE active='Y' and meet_begin_at<'".date('Y-m-d')."'                      
                      ",TRUE)
		->as_object()
		->execute();
		$modules = $modules->as_array();

		$result ='<div class="roles">';
		 
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>客户管理</span></h3>';
		$result .='<div class="cusmain clearfix">
                  <p style="padding-left:20px;font-size:18px;">目前，仅开放了展会管理功能，其他功能将陆续推出，敬请关注！</p>
	
		          <h4 style="width:300px;margin-left:20px;">展会相关统计：</h4>
		             <div>目前展会参展商共有：<span style="color:red">'.$modules[0]->ct.'</span> 家</div>
		             <div>目前展会参展商品共有：<span style="color:red">'.$modules[0]->pzs.'</span> 个品种</div>
		             <div>目前展会预定的订单总金额为：￥: <span style="color:red">'.$modules[0]->je.'</span> 元</div>
                   </div>
		';
		return $result;
	}

	function ajax_get_mods_cus_tmp_cart($info){


		$result  ='';

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=suporder&fl=ex"><span class="leftimg"><i class="img calfimage icon-ex"></i></span><span>导出</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusup">';
		$result .='</i><span>展会购物车</span></h3>';
		$result .='<div class="info"></div>';
		$isie=strpos($_SERVER['HTTP_USER_AGENT'], "MSIE");
		//$modules= (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE"))? $this->get_tmp_db($info['userid'],$info['meetid']): $this->get_tmp_cookie();
		$modules= $this->get_tmp_db($info['userid'],$info['meetid']);

		//print_r($modules);
		//echo Kohana::debug((string) $modules);

		$result .='<div>
		           <table class="list" id="cartlist"><thead>
		             <tr><th>序号</th><th>商品名称</th><th>规格</th>
		             <th>单位</th><th>生产企业</th><th>数量</th><th>单价</th>
		             <th align="center">金额</th><th></th></tr></thead>';
		$result .='<tbody>';
		$i=0;
		$amount = 0;

		foreach($modules as $key => $value){
			// echo $value[0];
			$mod = ($i%2)?'odd':'even';
			//$value = $value[$key];
				
			$amount = $amount + ((float)$value->num*(float)$value->price);
			$i=$i+1;
			$result .='<tr style="border-top:1px #ccc solid" id="t'.$value->product_id.'" >';
			$result .='<td class="'.$mod.'"><input type="hidden" id="cartid'.$value->product_id.'" name="cartid'.$value->product_id.'" value="'.$value->id.'" />'.$i.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_name.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_spec.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_unit.'</td>';
			$result .='<td class="'.$mod.'" style="width:190px;">'.$value->product_origin.'</td>';
			$result .='<td class="'.$mod.'"><input style="width:50px;" name="num'.$value->product_id.'" id="num'.$value->product_id.'" onkeyup="Custs.UpdtmpCart(\''.$value->meet_id.'|'.$value->product_id.'|'.$value->sid.'\')" value='.$value->num.'></td>';
			$result .='<td class="'.$mod.'" name="price'.$value->product_id.'" id="price'.$value->product_id.'">'.number_format($value->price, 2, '.', ',').'</td>';
			$result .='<td style="color:red" class="'.$mod.' amount" align="right" id="amout'.$value->product_id.'">'.number_format(((float)$value->num*(float)$value->price), 2, '.', ',').'</td>';
			$result .='<td class="'.$mod.' buttons" style="width:60px;" align="right"><a href="javascript:Custs.DeltmpCart(\''.$value->meet_id.'|'.$value->product_id.'|'.$value->sid.'\')"><span style="top:4px;" class="leftimg">
			                      <i class="img calfimage icon-del"></i>
			                   </span>删除</a></td>';
			$result .='</tr>';
		}
		if ($amount=== 0){
			$result .='<tr><td align="center" style="font-size:14px;" colspan=8 >暂时没有记录！</td><td></td></tr>';
		}
		$result .=' </tbody>';
		$result .='<tfoot>';
		$result .='<tr><td class="even" colspan=7>合计:</td><td align="right" class="even total">￥：'.number_format($amount, 2, '.', ',').'</td><td></td></tr>';
		$result .='</tfoot>';
		$result .='</table>';
		$result .='</div>';
		$result .='<div class="btn">
	               <div class="dialog_buttons ">
    	             <label class="uiButton" style="width:130px" >
    	               <input type="button" style="width:130px"  name="save" onclick="Custs.SubmitCart()" value="确定无误，提交订单">
    	             </label>
    	              或  <label ><a style="margin-top:20px" href="/home?sk=custmt" >继续采购</a></label>
    	              
    	           </div>
	    </div></div>';
		return $result;


	}

	function ajax_get_mods_cus_prod_view_list($info){

		$userid=$info['userid'];
		$supid =$info['supid'];
		$meetid =$info['meetid'];
	  

		$modules= DB::query(Database::SELECT,"
		              SELECT suppliers.id,suppliers.product_id,products.product_name, product_spec,product_unit,
		                     product_origin,limit_number,price,favorable,picname,product_pzwh,product_group
                      FROM suppliers
                      INNER JOIN products ON suppliers.product_id = products.product_id
                      INNER JOIN meets ON suppliers.meet_id = meets.id 
                      WHERE suppliers.product_id=:prodid and suppliers.sup_id=:sid and meet_id=:mid and active='Y' and price>0
                      ",TRUE)
		->param(':prodid',$info['prodid'])
		->param(':sid',$supid)
		->param(':mid',$meetid);

		$modules = $modules->as_object()->execute();
		$ary= $modules->as_array();

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=custmtcart&fl='.$meetid.'"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>查询购物车</span></a></div>';

		$result .='<h3 class="uiHeaderTitle"><a href="/home?sk=custmt"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>展会浏览</span></a> <span class="ss"> >> </span><span class="sf">
		           <input type="hidden" name="supid" id="supid" value="'.$supid.'"> 正在浏览品种 </span></h3>';
	  


		$result.='<div class="prodview clearfix">
		            <div style="padding-left:20px"><a href="javascript:history.go(-1);">返回上一页</a></div>
		            <div class="clearfix" style="min-height:60px;height:auto !importion;height:60px;margin:20px 20px;font-size:14px;border:1px #d94141 solid;padding:20px;"><label>该商品的促销：</label><p>'.$ary[0]->favorable.'</p></div>
		            <div style="height:300px" class="clearfix">
		            <div class="lfloat">
		              <img onerror="javascript: this.src=\'/media/images/null.jpg\'" width=180px height=180px src="/media/images/meets/'.$ary[0]->picname.'" /> 
		            </div>
		            <div class="rfloat">
		             
		             <ul>
		               <li style="font-size:14px;width:530px;"><label >商品名称:</label> <span>'.$ary[0]->product_name.'</span></li>
		               <li><label>规格:</label> <span>'.$ary[0]->product_spec.'</span></li>
		               <li><label>单位:</label> <span>&nbsp;'.$ary[0]->product_unit.'</span></li>
		               <li><label>生产企业:</label> <span>'.$ary[0]->product_origin.'</span></li>
		               <li><label>包装:</label> <span>'.$ary[0]->product_group.'</span></li>
		               <li><label>批准文号:</label> <span>'.$ary[0]->product_pzwh.'</span></li>
		               <li><label>单价:</label> <span id="price'.$ary[0]->product_id.'">'.$ary[0]->price.'</span></li>
		               <li><label>订购数量:</label> <span><input name="num'.$ary[0]->product_id.'" id="num'.$ary[0]->product_id.'" value="1" /></span></li>
		               <li style="padding-top:10px"><label>&nbsp;</label> <span>
		               <input type="button" name="submit" id="submit" value="放入购物车" onclick="Custs.AddToTmpCart(\''.$meetid.','.$ary[0]->product_id.'\')" /></span>
		               <span id="msg'.$ary[0]->product_id.'"></span>
		               
		               </li>
                       <li style="padding-top:10px"><label>&nbsp;</label> <span><a href="javascript:history.go(-1);">返回上一页</a></span></li>
		               </ul>
		           
		            </div>
                  
		            </div>     		
            		  <div class="otherpord clearfix"><h4>其他同类商品</h4></div>  
		            
		   ';

		$result.='</div>

		';

		return $result;
	}
	 
	function ajax_get_mods_cus_view_list($info){

		$meetid= array_key_exists('meetid',$info)?$info['meetid']:'';

		$resultdb= DB::query(Database::SELECT,"SELECT *
				              FROM users 
				              LEFT OUTER JOIN suppliers_favs ON suppliers_favs.sup_id = users.userid
				              WHERE sup_id=:id and meet_id=:meetid ",TRUE)
		->param(':id',$info['supid'])
		->param(':meetid',$meetid);
		//echo Kohana::debug((string) $resultdb);
		$resultdb=$resultdb->as_object()->execute();
		$location = '';
		$fav='';
		$username='';
		$supid=$info['supid'];
		foreach ($resultdb as $key=>$value){
			$fav.= $value->favorables;
			$location .= $value->location;
			$username .= $value->username;
			//$supid .=$value->sup_id;
		}


		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=custmtcart&fl='.$meetid.'"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>查询购物车</span></a></div>';

		$result .='<h3 class="uiHeaderTitle"><a href="/home?sk=custmt"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>展会浏览</span></a> <span class="ss"> >> </span><span class="sf">
		           <input type="hidden" name="supid" id="supid" value="'.$supid.'"> 正在浏览 '.$username.' 展位 </span></h3>';
	  
	  
		$modules= DB::query(Database::SELECT,"
		              SELECT suppliers.id,suppliers.product_id,products.product_name, product_spec,product_unit,
		                     product_origin,limit_number,price,favorable,picname,product_pzwh,product_group
                      FROM suppliers
                      INNER JOIN products ON suppliers.product_id = products.product_id
                      INNER JOIN meets ON suppliers.meet_id = meets.id 
                      WHERE suppliers.sup_id=:sid and meet_id=:mid and active='Y' and price>0
                      ",TRUE)
		->param(':sid',$info['supid'])
		->param(':mid',$meetid);

		$modules = $modules->as_object()->execute();

		if (!empty($fav)) {
			if ($location==='top')
			$result .='<div class="fav">'.$fav.'</div>';
		}

		$result .='<table class="list"><thead>
		<tr><th>序号</th><th width="60px;">图片</th><th width="220px">商品名称</th>
		    <th width="70px">规格</th><th width="10px">单位</th><th style="width:150px">生成企业</th>
		    <th style="width:60px">单价</th>
		    <th style="width:60px">预订数量</th></tr></thead>';
		$result .='<tbody>';
		$i=1;
		 
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr style="height:70px;border-top:1px #ccc solid" id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
			$result.= '<td colspan=8 ><div style="margin-bottom:10px;"><ul >';
			$result.= ' <li style="width:70px;margin-top:4px;" ><img onerror="javascript: this.src=\'/media/images/null.jpg\'" width=60px height=60px src="/media/images/meets/'.$value->picname.'" /></li>';
			$result.= ' <li style="width:220px;font-size:14px;padding-top:2px;">
                        <a href="/home?sk=custmtprodview&fl='.$meetid.','.$supid.','.$value->product_id.'">'.$value->product_name.'</a>
                        <div style="font-size:12px;"><span>批准文号:</span><span>'.$value->product_pzwh.'</span></div>';
			$result.= '</li>';
			$result.= ' <li style="width:100px"><span >'.$value->product_spec.'</span></li>';
			$result.= ' <li style="width:30px"><span>'.$value->product_unit.'</span></li>';
			$result.= ' <li style="width:160px"><span>'.$value->product_origin.'</span>
                         <div style="font-size:12px;"><span>包装:</span><span>'.$value->product_group.'</span></div>
                      </li>';
			// $nm = ($value->limit_number==0)?'不限':$value->limit_number;
			// $result.= ' <li style="width:50px"><span>'.$nm.'</span></li>';
			//  $result.= ' <li style="width:40px;float:left;padding-right:5px;"><span class="required" id="price'.$value->product_id.'">'.$value->price.'</span></li>';
			$result.= ' <li style="width:130px;float:right;padding-right:5px;" >
                         <div style="float:left;width:50px" class="required" id="price'.$value->product_id.'">'.$value->price.'</div>
                         <div style="float:left;width:70px">
                           <input type="hidden" name="pid" id="pid" value="'.$value->product_id.'">
                           <input style="width:70px" name="num'.$value->product_id.'" id="num'.$value->product_id.'" value="1" />
                           <input style="width:75px" type="button" name="submit" id="submit" onclick="Custs.AddToTmpCart(\''.$meetid.','.$value->product_id.'\')" value="放入购物车" />
                           <span style="color:#385998" id="msg'.$value->product_id.'"></span>
                         </div></li>';
			$result.= '</ul>
                       </div>';     
			if (!empty($value->favorable))
			$result.= '<div style="clear:both;width:100%;padding:10px 0px;">
			             <div style="padding-left:70px;width:600px;color:black;font-size:14px;"><span style="font-weight:bold;">促销：</span>'.$value->favorable.'</div> 
			           </div>  ';
			$result.= '</td></tr>';
				
			$i++;
		}
		$result .='</tbody>';
		$result .='</table>';

		if (!empty($fav)){
			if ($location==='bottom')
			$result .='<div class="fav">'.$fav.'</div>';
		}

		return $result;

	}

	//添加投诉和建议
	function ajax_get_mods_cus_add_ropose(){

		$result ='<h2 class="dialog_title"><span>添加投诉和建议</span></h2>';
		$result .='<div class="dialog_content"  >';
		$result .=' <div style="margin:10px;">
	                   <textarea style="width:99%;font-size:14px;padding:5px;" rows=10 name="roposecontnet" id="roposecontnet"></textarea>
	                </div>
	              ';
		$result .='  </div>';
		$result .=' <div class="dialog_buttons ">
    	             <label class="uiButton" >
    	               <input type="button" name="save" onclick="Custs.SubmitRopose()" value="确定">
    	             </label>
    	             <label class="uiButton cancel">
    	               <input type="button" name="cancel" value="取消" onclick="Custs.closedialog()">
    	             </label>
    	            </div>';
		return $result;
	}



	/*
	 * 投诉建议
	 */
	function ajax_get_mods_cus_ropose($info){

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="javascript:Custs.AddRopose(1);"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>添加投诉和建议</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>投诉和建议</span></h3>';

		$modules= DB::query(Database::SELECT,"
		              SELECT * FROM roposes
                      WHERE active='Y' and user_id=:userid
                      order by update_at desc                      
                      ",TRUE)
		->param(':userid',$info['userid'])
		->as_object()
		->execute();
			
		$result .='<table class="list">
		<thead>
		   <th>序号</th><th>内容</th>
		</thead>';
		$result .='<tbody>';
		$i=1;

		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
			$result.= '<td  class="'.$mod.'">
			             <table style="background:#fff;width:100%" class="divropose">
			               <tr><td style="background:#F6F7F8" colspan=2>创建日期：'.$value->create_at.'</td></tr>
			               <tr>
			                 <td style="width:40px">内容:</td>
			                 <td><div>'.$value->content.'</div></td>
			               </tr>';
			if (!empty($value->reports))
			$result.='<tr><td colspan=2 style="padding-left:48px">时间：'.$value->create_at.' <span style="padding-left:20px;">答复:</span></td></tr>
			           <tr>
			                 <td></td>
			                 <td><div style="color:blue">'.$value->reports.'</div></td>
			           </tr>'; 
				
			$result.='</table>
			         </td>';

			$result.= '</tr>';
			$i++;
		}

		$result .='</tbody>';
		$result .='</table></div>';
		return $result;
	}

	/*
	 * 得到展会的列表 
	 */
	function ajax_get_mods_cus_list(){

		$meetid ='';


		$modules= DB::query(Database::SELECT,"
		              SELECT *,IFNULL(amount,0) as amount
		              FROM 
		                (SELECT sup_id,meet_id,count(product_id) as pcount,(select round(sum(num*price),2) as je 
		                        from suporders b where b.sup_id=suppliers.sup_id) as amount 
		                 FROM suppliers 
		                 WHERE suppliers.price>0
		                 GROUP BY sup_id,meet_id) a
		                 
                      INNER JOIN users ON a.sup_id = users.userid
                      INNER JOIN meets ON a.meet_id = meets.id
                      WHERE active='Y' and meet_begin_at<='".date('Y-m-d')."'
                      ORDER BY users.id                       
                      ",TRUE);
		//echo Kohana::debug((string) $modules);
		$modules=$modules->as_object()
		->execute();
		$tt= $modules->as_array();


		if (count($tt)>0)
		{
			$result ='<div class="roles">';
			$result .='<div class="contextual"><a href="/home?sk=custmtcart&fl='.$meetid.'"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
			$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
			$result .='</i><span>展会列表</span></h3>';
				
				
			$meetid= $tt[0]->meet_id;


			$result .='<table class="list">
		<thead>
		   <th>序号</th><th>参会商名称</th><th>参展商品数</th><th>已预订单金额</th>
		</thead>';
			$result .='<tbody>';
			$i=1;

			foreach($modules as $key => $value){
				$mod = ($i%2)?'odd':'even';
				$result.= '<tr id="row'.$value->id.'" class="" >';
				$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
				$result.= '<td  class="'.$mod.'"><span><a href="/home?sk=custmtview&fl='.$value->meet_id.','.$value->sup_id.'">'.$value->username.'</a></span></td>';
				$result.= '<td width="100px;" align="center" class="'.$mod.'"><span>'.$value->pcount.'</span></td>';
				$result.= '<td width="60px;" style="padding-right:5px;" align="right" class="'.$mod.'"><span>'.$value->amount.'</span></td>';
				$result.= '</tr>';
				$i++;
			}

			$result .='</tbody>';
			$result .='</table></div>';
		}
		else{
		 $result ='<div class="roles">';
		 // $result .='<div class="contextual"><a href="/home?sk=custmtcart&fl='.$meetid.'"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
		 $result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		 $result .='</i><span>展会列表</span></h3>';
		 $result .= '<div style="width:100%;text-align:center;font-size:16px;">目前还没有展会！</div> </div>';

		}

		return $result;
	}



	function ajax_get_mods_customer_meet_cart_list($userid,$bdate,$edate){
		$result ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>展会订单</span></h3>';

		$modules= DB::query(Database::SELECT,"
		              SELECT b.product_id,b.product_name,
                             b.product_spec,b.product_unit,
                             b.product_origin, 
                             a.sup_id,
                             num,
                             price,
                             round((num*price),2) as amount,
                             left(order_at,10) as at,
                             case when active=0 then '未开单' else '已成功开单' end as zt
                             
                      FROM suporders a INNER JOIN 
                           products b ON a.prod_id = b.product_id
                      WHERE left(order_at,10) between :bdate and :edate and a.cus_id=:cus_id  
                      order by  left(order_at,10)  
                      ",TRUE)
		->param(':cus_id',$userid)
		->param(':bdate',$bdate)
		->param(':edate',$edate);
		// 	 echo Kohana::debug((string) $modules);
		$modules=$modules->as_object()->execute();

			
		$result .='<table class="list">
		<thead>
		   <tr><td style="backgound-color:#fff" colspan=9 >
		   <div style="margin-bottom:5px;height:32px;line-height:32px;" class="clearfix">
              
		   <div style="float:left;font-size:14px">查询日期：</div>
		      <div class="datebox"><input type="text" class="inputtext" value="'.$bdate.'" id="start_time_intl_field" name="start_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)"></div>
		      <span style="float:left">--</span>
		      <div class="datebox"><input type="text" class="inputtext" value="'.$edate.'" id="end_time_intl_field" name="end_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)"></div>
		      <div class="dialog_buttons " style="float:left;padding-top:4px;padding-left:10px;" >
    	             <label class="uiButton" style="width:40px" >
    	               <input type="button" style="width:40px"  name="save" onclick="Custs.FindCart()" value="查询">
    	             </label>
    	      </div>
    	    
           </div>
		  
    	    </td></tr>
		   <tr><th>序号</th><th>商品名称</th><th>规格</th>
		   <th>生产企业</th><th>数量</th><th>单位</th><th>单价</th><th>金额</th><th>订单状态</th></tr>
		</thead>';
		$result .='<tbody>';
		$i=1;
		$amount = 0.00;
		$dt='';
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$amount= (float)$amount+ (float)$value->amount;
			if (empty($dt)|| $dt!= $value->at)
			{
				$dt= $value->at;
				$i=1;
				$result.='<tr><td class="odd" style="border-top:1px #ccc solid" colspan=9 >'.$dt.'</td></tr>';
			}
			$result.= '<tr id="row" class="" style="border-bottom:0.1em #c1c1c1 dotted" >';
			$result.= '<td style="width:10px;" align="center" >'.$i.'</td>';
			$result.= '<td ><span><a href="">'.$value->product_name.'</a></span></td>';
			$result.= '<td style="width:80px;">'.$value->product_spec.'</td>';
			$result.= '<td style="width:120px;">'.$value->product_origin.'</td>';
			$result.= '<td style="width:10px;" align="right">'.$value->num.'</td>';
			$result.= '<td style="width:10px;" align="left">'.$value->product_unit.'</td>';
			$result.= '<td width="50px;" align="right"><span>'.$value->price.'</span></td>';
			$result.= '<td width="50px;" align="right"><span style="color:red">'.$value->amount.'</span></td>';
			$result.= '<td width="60px;" align="center" ><span>'.$value->zt.'</span></td>';
			$result.= '</tr>';
			$i++;
		}
		$result .= '<tr><td style="background:#eee"></td><td style="background:#eee" colspan=2>合计：</td><td align="right" style="background:#eee" colspan=5 >￥：'.$amount.'元</td><td style="background:#eee"></td></tr>';
		$result .='</tbody>';
		$result .='</table></div>';
		return $result;
	}



}
