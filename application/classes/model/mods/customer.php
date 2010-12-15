<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Customer {

    
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
      
      function set_cookie_to_cart($cusid){
      	$isexists = array_key_exists('meetcart', $_COOKIE); 
      	 if ($isexists) {
      	 	
            $b = Cookie::get('meetcart');
            $pet =(array)json_decode($b);
             
            $sql = '';
            foreach ($pet as $k=>$v) {
              $ary = explode('|',$k);	
              if ($this->checkcart($cusid,$ary[2],$ary[1],$ary[0]))
              {
              	$sql = "UPDATE suporders set num=num+:num 
              	                  WHERE cus_id=:cusid 
              	                    and sup_id=:supid
              	                    and prod_id=:prodid";
              	
              	$result = DB::query(Database::UPDATE,$sql,true)
              	->param(':num',$v)
              	->param(':cusid',$cusid)
              	->param(':supid',$ary[2])
              	->param(':prodid',$ary[1])
              	->as_object()->execute();
              }
              else 
              {
              	
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
               
              	
               $sql ="INSERT INTO suporders (cus_id,sup_id,prod_id,num,meet_id,price,order_at) values 
                      (:cusid,:supid,:prod_id,:num,:meet_id,:price,:order_at)";

               $result = DB::query(Database::INSERT,$sql,true)
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
      	 }      	 
      	 if ($result==1)
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
	
      function get_tmp_cookie() { 
      	
    	$isexists = array_key_exists('meetcart', $_COOKIE);
    	$pet='';
    	$arys=array();
        if ($isexists) {
            $b = Cookie::get('meetcart');
            $pet =(array)json_decode($b); 
            
            $arys = array();
            
            foreach ($pet as $key => $value){
            	$t = explode('|',$key);
    
            	$meetid = $t[0];
            	$prodid = $t[1];
            
            	$num = $value;
            	$db = DB::query(Database::SELECT,"SELECT suppliers.sup_id,suppliers.meet_id,suppliers.price,suppliers.favorable,suppliers.picname
            	                 ,products.*,".$num." as num
            	                 FROM suppliers INNER JOIN 
            	                 products ON suppliers.product_id = products.product_id
            	                 WHERE suppliers.product_id=:pid and meet_id=:meetid",TRUE)
            	     ->param(':pid',$prodid)
            	     ->param(':meetid',$meetid);
            	    
            	   //  echo Kohana::debug((string) $db); 
            	    
            	     $db=$db->as_object()->execute();
            	     
            	foreach ($db as $key=>$value){     
            	   $arys[][$key]=$value;
            	};
            
            }
            
        }
        return $arys;
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
				//$resultdb = DB::query(Database::INSERT,$sql,TRUE);
				// echo Kohana::debug((string) $resultdb);
				//$resultdb = $resultdb->as_object()->execute();
				
				$result =array('msg'=>$sql);
			}
			
				
		}
		return json_encode($result);
	}

	
	function ajax_get_mods_cus_tmp_cart($info){
		
		
		$result  ='';	

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=suporder&fl=ex"><span class="leftimg"><i class="img calfimage icon-ex"></i></span><span>导出</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menusup">';
		$result .='</i><span>展会订单</span></h3>';
		$result .='<div class="info"></div>';


		$modules= $this->get_tmp_cookie();
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
			$mod = ($i%2)?'odd':'even';
			$value=$value[0];
			$amount = $amount + ((float)$value->num*(float)$value->price);
			$i=$i+1;
			$result .='<tr id="t'.$value->product_id.'" >';
			$result .='<td class="'.$mod.'">'.$i.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_name.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_spec.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_unit.'</td>';
			$result .='<td class="'.$mod.'">'.$value->product_origin.'</td>';
			$result .='<td class="'.$mod.'"><input style="width:50px;" name="num'.$value->product_id.'" id="num'.$value->product_id.'" onkeyup="Custs.UpdtmpCart(\''.$value->meet_id.'|'.$value->product_id.'|'.$value->sup_id.'\')" value='.$value->num.'></td>';
			$result .='<td class="'.$mod.'" name="price'.$value->product_id.'" id="price'.$value->product_id.'">'.number_format($value->price, 2, '.', ',').'</td>';
			$result .='<td class="'.$mod.' amount" align="right" id="amout'.$value->product_id.'">'.number_format(((float)$value->num*(float)$value->price), 2, '.', ',').'</td>';
			$result .='<td class="'.$mod.' buttons" style="width:60px;" align="right"><a href="javascript:Custs.DeltmpCart(\''.$value->meet_id.'|'.$value->product_id.'|'.$value->sup_id.'\')"><span style="top:4px;" class="leftimg">
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
   
	function ajax_get_mods_cus_view_list($info){
	
		$meetid= array_key_exists('meetid',$info)?$info['meetid']:'';
		
		$resultdb= DB::query(Database::SELECT,"SELECT * 
				              FROM suppliers_favs 
				              INNER JOIN users ON suppliers_favs.sup_id = users.userid
				              WHERE sup_id=:id and meet_id=:meetid ",TRUE)
						 ->param(':id',$info['userid'])
				         ->param(':meetid',$meetid);
		// echo Kohana::debug((string) $resultdb);		         	
	    $resultdb=$resultdb->as_object()->execute();
	    $location = '';
	    $fav='';
	    $username='';
	    $supid='';
	    foreach ($resultdb as $key=>$value){
	    	$fav.= $value->favorables;
	    	$location .= $value->location;
	    	$username .= $value->username;
	    	$supid .=$value->sup_id;
	    }
		

		$result ='<div class="roles">';
	    $result .='<div class="contextual"><a href="/home?sk=custmtcart"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>查询购物车</span></a></div>';
	
		$result .='<h3 class="uiHeaderTitle"><a href="/home?sk=supm"><i class="calfimage spritemap_aanaup menusup">';
		$result .='</i><span>展会管理</span></a> <span class="ss"> >> </span><span class="sf">
		           <input type="hidden" name="supid" id="supid" value="'.$supid.'"> 正在浏览 '.$username.' 展位 </span></h3>';
	    
	    
	    $modules= DB::query(Database::SELECT,"
		              SELECT suppliers.id,suppliers.product_id,products.product_name, product_spec,product_unit,
		                     product_origin,limit_number,price,favorable
                      FROM suppliers
                      INNER JOIN products ON suppliers.product_id = products.product_id
                      INNER JOIN meets ON suppliers.meet_id = meets.id 
                      WHERE suppliers.sup_id=:sid and meet_id=:mid and active='Y'
                      ",TRUE)
		->param(':sid',$info['userid'])
		->param(':mid',$meetid);
		
		$modules = $modules->as_object()->execute();

        if (!empty($fav)) {
          if ($location==='top') 
             $result .='<div class="fav">'.$fav.'</div>'; 
        }
		
		$result .='<table class="list"><thead>
		<tr><th>序号</th><th width="60px;">图片</th><th width="150px">商品名称</th>
		    <th width="70px">规格</th><th width="10px">单位</th><th style="width:150px">生成企业</th>
		    <th style="width:30px">限购</th><th style="width:60px">单价</th>
		    <th style="width:60px">预订数量</th></tr></thead>';
		$result .='<tbody>';
		$i=1;
         
		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr style="height:70px;border-top:1px #ccc solid" id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
            $result.= '<td colspan=8 ><div style="margin-bottom:10px;"><ul >';
            $result.= ' <li style="width:70px;margin-top:4px;" ><img onerror="javascript: this.src=\'/media/images/null.jpg\'" width=60 height=60px src="" /></li>';
            $result.= ' <li style="width:160px;font-size:14px;"><a href="/home?sk=supmview&fl='.$value->product_id.'">'.$value->product_name.'</a>';
            $result.= '</li>';
            $result.= ' <li style="width:100px"><span >'.$value->product_spec.'</span></li>';
            $result.= ' <li style="width:30px"><span>'.$value->product_unit.'</span></li>';
            $result.= ' <li style="width:180px"><span>'.$value->product_origin.'</span></li>';
            $nm = ($value->limit_number==0)?'不限':$value->limit_number;
            $result.= ' <li style="width:50px"><span>'.$nm.'</span></li>';
            $result.= ' <li style="width:60px"><span class="required" id="price'.$value->product_id.'">'.$value->price.'</span></li>';
            $result.= ' <li style="width:50px">
                         <span>
                           <input type="hidden" name="pid" id="pid" value="'.$value->product_id.'">
                           <input style="width:50px" name="num'.$value->product_id.'" id="num'.$value->product_id.'" value="1" />
                           <input style="width:55px" type="button" name="submit" id="submit" onclick="Custs.AddToTmpCart(\''.$meetid.','.$value->product_id.'\')" value="提交" />
                           <span style="color:#385998" id="msg'.$value->product_id.'"></span>
                         </span></li>';
            $result.= '</ul>
                       </div>';     
			  if (!empty($value->favorable))
			$result.= '<div style="clear:both;width:100%;">
			             <div style="width:400px;">促销：'.$value->favorable.'</div> 
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
	
    /*
     * 得到展会的列表 
     */
	function ajax_get_mods_cus_list(){

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=custmtcart"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>展会列表</span></h3>';

		$modules= DB::query(Database::SELECT,"
		              SELECT * FROM 
		                (SELECT sup_id,meet_id,count(product_id) as pcount
		                 FROM suppliers
		                 GROUP BY sup_id,meet_id) a
                      INNER JOIN users ON a.sup_id = users.userid
                      INNER JOIN meets ON a.meet_id = meets.id
                      WHERE active='Y' and meet_begin_at<'".date('Y-m-d')."'                      
                      ",TRUE)
		              ->as_object()
		              ->execute();
		 
		$result .='<table class="list">
		<thead>
		   <th>序号</th><th>参会商名称</th><th>参展商品数</th><th>预订单金额</th>
		</thead>';
		$result .='<tbody>';
		$i=1;

		foreach($modules as $key => $value){
			$mod = ($i%2)?'odd':'even';
			$result.= '<tr id="row'.$value->id.'" class="" >';
			$result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
			$result.= '<td  class="'.$mod.'"><span><a href="/home?sk=custmtview&fl='.$value->meet_id.'">'.$value->username.'</a></span></td>';
			$result.= '<td width="100px;" align="center" class="'.$mod.'"><span>'.$value->pcount.'</span></td>';
			$result.= '<td width="60px;" align="center" class="'.$mod.'"><span>0</span></td>';
			$result.= '</tr>';
			$i++;
		}
		
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}
	
	
	
	function ajax_get_mods_customer_meet_cart_list($bdate,$edate){
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
                      WHERE left(order_at,10) between :bdate and :edate  
                      order by  left(order_at,10)  
                      ",TRUE)
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
		   <span style="float:left">--</span><div class="datebox"><input type="text" class="inputtext" value="'.$edate.'" id="end_time_intl_field" name="end_time_intl_field" size="10" autocomplete="off" onclick="MyCalendar.SetDate(this)"></div>
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
			$result.= '<td width="50px;" align="right"><span>'.$value->amount.'</span></td>';
			$result.= '<td width="60px;" align="center" ><span>'.$value->zt.'</span></td>';
			$result.= '</tr>';
			$i++;
		}
		$result .= '<tr><td style="background:#eee"></td><td style="background:#eee" colspan=2>合计：</td><td align="right" style="background:#eee" colspan=5 >￥：'.$amount.'元</td><td style="background:#eee"></td></tr>';
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}
 
	

}
