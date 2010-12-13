<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Customer {

	
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
				
		}
		return json_encode($result);
	}

    /*
     * 得到展会的列表 
     */
	function ajax_get_mods_cus_list(){

		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=custmcart"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
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
			$result.= '<td  class="'.$mod.'"><span><a href="">'.$value->username.'</a></span></td>';
			$result.= '<td width="100px;" align="center" class="'.$mod.'"><span>'.$value->pcount.'</span></td>';
			$result.= '<td width="60px;" align="center" class="'.$mod.'"><span>0</span></td>';
			$result.= '</tr>';
			$i++;
		}
		
		$result .='</tbody>';
		$result .='</table>';
		return $result;
	}
	
	function ajax_get_mods_customer_meet_cart_list(){
		$result ='<div class="roles">';
		$result .='<div class="contextual"><a href="/home?sk=custmcart"><span class="leftimg"><i class="img calfimage icon-add"></i></span><span>参会购物车</span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menucus">';
		$result .='</i><span>展会列表<span class="ss"> >> </span><span class="sf"> 参会购物车 </span></span></h3>';
		/*
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
			$result.= '<td  class="'.$mod.'"><span><a href="">'.$value->username.'</a></span></td>';
			$result.= '<td width="100px;" align="center" class="'.$mod.'"><span>'.$value->pcount.'</span></td>';
			$result.= '<td width="60px;" align="center" class="'.$mod.'"><span>0</span></td>';
			$result.= '</tr>';
			$i++;
		}
		
		$result .='</tbody>';
		$result .='</table>';*/
		return $result;
	}
 
	

}
