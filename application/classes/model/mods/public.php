<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Public {
	/*
	 * 数据模块
	 */
	function ajax_Set_Model_Public($array,$type="DELETE"){
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
	
	
	function ajax_get_public_list(){

	    $result  ='';
		$result ='<div class="roles">';
		//$result .='<div class="contextual"><a href="/home?sk=suporder&fl=ex"><span class="leftimg"><i class="img calfimage icon-ex"></i></span><span></span></a></div>';
		$result .='<h3 class="uiHeaderTitle"><i class="calfimage spritemap_aanaup menunt">';
		$result .='</i><span>最新公告和信息</span></h3>';
	    $result .='<div class="pubnotes clearfix">';	
		$modules= DB::query(Database::SELECT,"
		              SELECT *
                      FROM notes
                      order by create_at desc
                      limit 1
                      ",TRUE);
		//echo Kohana::debug((string) $modules);

		$modules=$modules->as_object()->execute();
		
		foreach($modules as $key => $value){
			$result.=$value->contents;
		}
		$result .='</div>';
	 	return $result;	
		
	}
	

	

}
