<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Mods_Hisptial {

	
	
	/*
	 * 数据模块
	 */
	function ajax_set_hisptial_product($array,$type="SELECT"){
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
			
			case "UPDATEFAV":{
				$userid = $ary["userid"];
				$meetid = $ary["meetid"];
				$content = $ary["content"];
				$location = $ary["location"];
				
				$result= DB::query(Database::SELECT,"SELECT COUNT(1) as ct 
				              FROM suppliers_favs 
				              WHERE sup_id=:id and meet_id=:meetid ",TRUE)
						 ->param(':id',$userid)
				         ->param(':meetid',$meetid);
				//echo Kohana::debug((string) $result);         	
				$result=$result->as_object()->execute();
				
				foreach ($result as $key=>$value){
				   $rs = $value->ct;
				}
						
				if ((int)$rs === 0)
				{
				  $result= DB::query(Database::INSERT,"INSERT suppliers_favs (sup_id,meet_id,location,favorables) 
				          values (:id,:meetid,:location,:favorables)
				          ",TRUE)
				         ->param(':id',$userid)
                         ->param(':meetid',$meetid)	
                         ->param(':location',$location)	
                         ->param(':favorables',$content);
				          
				 //  echo Kohana::debug((string) $result);
				  $result = $result->as_object()->execute(); 
				  	
				}
				else
				{
				  $result= DB::query(Database::UPDATE,"UPDATE suppliers_favs 
				         SET favorables=:favorables,location=:location
				         WHERE sup_id=:id and meet_id=:meetid ",TRUE)
				         ->param(':id',$userid)
				         ->param(':favorables',$content)
				         ->param(':location',$location)
				         ->param(':meetid',$meetid);	
				          
				  // echo Kohana::debug((string) $result);
				  $result = $result->as_object()->execute(); 
				}
			}break;
				
		}
		return json_encode($result);
	}
	
	/*
	 * 浏览会展
	 */
	function ajax_get_hisptial_product_lists(){
		
		$result ='<div class="roles">';
		$result .='<h3 class="uiHeaderTitle"><a href="/home?sk=hsp"><i class="calfimage spritemap_aanaup menuhsp">';
		$result .='</i><span>品种查询</span></a> <span class="ss">  </span></h3>';
		
	        $result .='<table class="list"><thead>
		           <tr >
                              <th style="background:#fff" colspan=9>商品名称:
                              <input style="width:100px;" name="yp" id="yp" value=""/>
                              生产企业：<input style="width:100px;" name="cd" id="cd" value=""/>
                             <input type="button" name="find" id="find" value="查询" onclick="Hiss.findprod();"/></th>
                           </tr>
                            <tr>
                            <th>序号</th><th width="60px;">图片</th><th width="150px">商品名称</th>
		            <th width="80px">规格</th><th>单位</th><th style="width:170px">生成企业</th>
		            <th style="width:40px">数量</th><th style="width:60px">单价</th>
		            <th style="width:60px">预订数量</th>
                           </tr></thead>';
		$result .='<tbody>';
         	$result .='</tbody>';
		$result .='</table></div>';
		return $result;
	}


        function ajax_get_hisptial_product_lists_ajax($info){

                $result='';
		$yp= array_key_exists('yp',$info)?$info['yp']:'';
                $cd= array_key_exists('cd',$info)?$info['cd']:'';
                $p = array_key_exists('p',$info)?$info['p']:'0';


                if (empty($yp) or strlen($yp)<2)
                $result='<tr ><td colspan=9  align="center">请先输入查询内容。(商品名称要输入两个字母以上)</td></tr>';
                else{
                    $resultdb= Mssql::query(Database::SELECT,"
                    exec sql2k5_pages
                       @tblname='az_kcbs',
                       @fldname='ypbh',
                       @pagesize=20,
                       @pageindex=0,
                       @doCount=1,
                       @strwhere=' (ypmc like :yp or ypdm like :yp) and (cdmc like :cd or cddm like :cd)'
                    ")
                    ->param(':yp',"''%".$yp."%''")
		    ->param(':cd',"''%".$cd."%''");
                   //echo Kohana::debug((string) $resultdb);
	             $resultdb=$resultdb->execute();
                 
                     $total = $resultdb[0]['Total'];

                     if ($total>0)
                     {

                        $per_page=20;

                        $ppage= Pagination::factory(
                                array(

                                          'total_items'       => $total,
		                           'items_per_page'    => $per_page,
		                           'view'              =>'pagination/cusfloating',
		                           'auto_hide'         => TRUE,
		                           'first_page_in_url' => FALSE,
                                           'ajaxfunc'          => 'Hiss.findprod',
                                    )
                                );

                        $page= $p;

            
                        $resultdb= Mssql::query(Database::SELECT,"
                          exec sql2k5_pages
                          @tblname='az_kcbs',
                          @fldname='ypbh',
                          @pagesize=$per_page,
                          @pageindex=$page,
                          @strwhere=' (ypmc like :yp or ypdm like :yp) and (cdmc like :cd or cddm like :cd)'
                        ")
                         ->param(':yp',"''%".$yp."%''")
		         ->param(':cd',"''%".$cd."%''");
                    // echo Kohana::debug((string) $resultdb);
	                $resultdb=$resultdb->as_object()->execute();

                        $result='';
	      
		        $i=1;

		        foreach($resultdb as $key => $value){
		   	   $mod = ($i%2)?'odd':'even';
                           $sl=((int)$value->sl>100)?'大于100':'小于100';
			   $result.= '<tr style="height:70px;border-top:1px #ccc solid" id="row'.$value->ypbh.'" class="" >';
			   $result.= '<td style="width:10px;" align="center" class="'.$mod.'">'.$i.'</td>';
                           $result.= '<td colspan=8 ><div style="margin-bottom:10px;"><ul >';
                           $result.= ' <li style="width:70px;margin-top:4px;" ><img onerror="javascript: this.src=\'/media/images/null.jpg\'" width=60 height=60px src="" /></li>';
                           $result.= ' <li style="width:160px;font-size:14px;"><a href="#">'.mb_convert_encoding($value->ypmc,'utf8','gb2312').'</a>';
                           $result.= '</li>';
                           $result.= ' <li style="width:100px"><span >'.mb_convert_encoding($value->gg,'utf8','gb2312').'</span></li>';
                           $result.= ' <li style="width:30px"><span>'.mb_convert_encoding($value->dw,'utf8','gb2312').'</span></li>';
                           $result.= ' <li style="width:180px"><span>'.mb_convert_encoding($value->cdmc,'utf8','gb2312').'</span></li>';
                           $result.= ' <li style="width:50px"><span style="">'.$sl.'</span></li>';
                           $result.= ' <li style="width:70px"><span style="float:right;padding-right:20px;color:red">'.sprintf("%01.2f", $value->cj).'</span></li>';
                           $result.= ' <li style="width:50px"><input style="width:50px;" name="num" id="num" value=""/></li>';
                           $result.= '</ul></div>';
                           $result.= '</td></tr>';

			$i++;
		     }
                      $result.= '<tr><td colspan=8>'.$ppage->render().'</td></tr>';
                    }

                   else
                    $result='<tr ><td colspan=9  align="center">没有查到记录</td></tr>';

                }

		return $result;
	}

   


}
