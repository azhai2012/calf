<?php defined('SYSPATH') or die('No direct access allowed.');

class Kohana_Hots {
	
	private $_id;
	private $_data = array();
	
    public static function factory($id,array $data = NULL)
	{
		return new Kohana_Hots($id,$data);
	}
	
	function __construct($id,array $data = NULL)
	{
       $this->_id = $id;
       $this->_data = $data; 
      
	}
	
	
	public function get_hots_content(){	 
		    
		    $result='<div id="account_list">
		           <div id="hnav">您现在的位置：展会区</div>
		           <div id="hots_context"> <!-- begin hots_context -->
		              <div class="left clearfix"> <!-- begin left -->
		              '.$this->get_hots_left_content().'
		              </div>  <!-- end left -->
		              <div class="right clearfix"> <!-- begin right --> '.$this->get_host_right_content();
					  
     	    $result.='</div> <!-- end right -->
		           </div> <!-- end account_context -->
		    </div>';
	        
		return $result;
		
	}
	
        private function get_host_right_content(){
            
            $array= array(
                           array('name'=>'凯图','url'=>'#','amount'=>203940.00),
                           array('name'=>'卡丹路','url'=>'#','amount'=>103940.00),
                           array('name'=>'卡尔蒂尼','url'=>'#','amount'=>33940.00),
                           array('name'=>'凯欧柯曼','url'=>'#','amount'=>503940.00),
                           array('name'=>'卡佛连','url'=>'#','amount'=>43940.00),
                           array('name'=>'康莉','url'=>'#','amount'=>3940.00),
                           array('name'=>'卡瓦文迪','url'=>'#','amount'=>940.00),
                           array('name'=>'KLX','url'=>'#','amount'=>240.00),
                            array('name'=>'KLX1','url'=>'#','amount'=>240.00),
                            array('name'=>'KLX1','url'=>'#','amount'=>240.00),
               );
            
         
            
            $result='
                <div class="hots-extra">
                 <h3>会展展商热销排行榜</h3> 
                 <ul>';
            foreach ($array as $key=>$value){
                 $flag='';
                if ($key==0){
                  $flag='flag1';  
                }
                if ($key==1){
                  $flag='flag2';  
                }
                if ($key==2){
                  $flag='flag3';   
                }
              $result.='<li><span class="h_no '.$flag.'">'.($key+1).'</span><span class="h_name"><a href="'.$value['url'].'">'.$value['name'].'</a></span><span class="h_amount">'.$value['amount'].'</span></li>';   
            } 
            $result.='</ul>
               </div>  
               
             ';
            $array= array(
                           array('name'=>'阿莫西林胶囊','url'=>'#','amount'=>203940.00),
                           array('name'=>'优卡单','url'=>'#','amount'=>103940.00),
                           array('name'=>'感冒胶囊','url'=>'#','amount'=>33940.00),
                           array('name'=>'板蓝根','url'=>'#','amount'=>503940.00),
                           array('name'=>'达可宁','url'=>'#','amount'=>43940.00),
                           array('name'=>'快克','url'=>'#','amount'=>3940.00),
                           array('name'=>'俺氛','url'=>'#','amount'=>940.00),
                           array('name'=>'顺气胶囊','url'=>'#','amount'=>240.00),
                            array('name'=>'六味地黄胶囊','url'=>'#','amount'=>240.00),
                            array('name'=>'阿胶','url'=>'#','amount'=>240.00),
               );
            $result.='
                <div class="hots-extra">
                 <h3>会展商品热销排行榜</h3> 
                 <ul>';
            foreach ($array as $key=>$value){
                $flag='';
                if ($key==0){
                  $flag='flag1';  
                }
                if ($key==1){
                  $flag='flag2';  
                }
                if ($key==2){
                  $flag='flag3';   
                }
                 
                $result.='<li><span class="h_no '.$flag.'">'.($key+1).'</span><span class="h_name"><a href="'.$value['url'].'">'.$value['name'].'</a></span><span class="h_amount">'.$value['amount'].'</span></li>';   
                    
               
            } 
            $result.='</ul>
               </div>  
               
             ';
            return $result;
        }
        
        


        private function get_hots_left_content(){
          
          $array_data= array(
                        array('name'=>'徐州片区会展','date_begin'=>'2011-09-01','date_end'=>'2011-09-07','isactive'=>1,
                              'values'=>array(
                                            array('name'=>'凯图','url'=>'#','img'=>'/media/images/767_2.jpg','counts'=>109),
                                            array('name'=>'卡丹路','url'=>'#','img'=>'/media/images/223_2.jpg','counts'=>210),
                                            array('name'=>'卡尔蒂尼','url'=>'#','img'=>'/media/images/330_2.jpg','counts'=>230),
                                            array('name'=>'凯乐石','url'=>'#','img'=>'/media/images/593_2.jpg','counts'=>132),
                                            array('name'=>'KLX','url'=>'#','img'=>'/media/images/1549_2.jpg','counts'=>45),
                                            array('name'=>'凯欧柯曼','url'=>'#','img'=>'','counts'=>45),
                                            array('name'=>'恺王','url'=>'#','img'=>'','counts'=>41),
                                            array('name'=>'KAJA','url'=>'#','img'=>'','counts'=>42),
                                            array('name'=>'卡佛连','url'=>'#','img'=>'','counts'=>43),
                                            array('name'=>'康莉','url'=>'#','img'=>'','counts'=>44),
                                            array('name'=>'卡瓦文迪','url'=>'#','img'=>'','counts'=>45),
                                  
                                         ),
                             ),
                        array('name'=>'连云港区会展','date_begin'=>'2011-09-10','date_end'=>'2011-09-17','isactive'=>1,
                              'values'=>array(
                                            array('name'=>'凯图','url'=>'#','img'=>'/media/images/767_2.jpg','counts'=>109),
                                            array('name'=>'卡丹路','url'=>'#','img'=>'/media/images/223_2.jpg','counts'=>210),
                                            array('name'=>'卡尔蒂尼','url'=>'#','img'=>'/media/images/330_2.jpg','counts'=>230),
                                            array('name'=>'凯乐石','url'=>'#','img'=>'/media/images/593_2.jpg','counts'=>132),
                                            array('name'=>'KLX','url'=>'#','img'=>'/media/images/1549_2.jpg','counts'=>45),
                                            array('name'=>'凯欧柯曼','url'=>'#','img'=>'','counts'=>45),
                                            array('name'=>'恺王','url'=>'#','img'=>'','counts'=>41),
                                            array('name'=>'KAJA','url'=>'#','img'=>'','counts'=>42),
                                            array('name'=>'卡佛连','url'=>'#','img'=>'','counts'=>43),
                                            array('name'=>'康莉','url'=>'#','img'=>'','counts'=>44),
                                            array('name'=>'卡瓦文迪','url'=>'#','img'=>'','counts'=>45),
                                  
                                          
                                         ),
                             ),
                      array('name'=>'苏州区会展','date_begin'=>'2011-09-20','date_end'=>'2011-09-21','isactive'=>0,
                              'values'=>array(
                                         ),
                             ),
                      array('name'=>'无锡区会展','date_begin'=>'2011-09-20','date_end'=>'2011-09-21','isactive'=>0,
                              'values'=>array(
                                         ),
                             ),
                      array('name'=>'常州区会展','date_begin'=>'2011-09-20','date_end'=>'2011-09-21','isactive'=>0,
                              'values'=>array(
                                         ),
                             ),
              
                      );
          
             $result='';
             foreach ($array_data as $key=>$value){
                 
                 $count = count($value['values']); 
                 $values= $value['values'];
                 $isactive= ($value['isactive']==1)?'active':'notactive';
                 $result.='
                  <div class="abc-a">
                     <div class="'.$isactive.'"></div>
                     <h3><a name="brandK">'.$value['name'].'</a></h3> ';
                 if ($value['isactive']==1){
                   $result.='
                     <div class="title"><p>参展供货商：'.$count.' 家</p>
                     <p>开始日期：'.$value['date_begin'].' -- 结束日期：'.$value['date_end'].'</p>
                     </div>    
                     <ul class="abc-height150px">
                  ';
                 for($i=0;$i< $count;$i++)
                 {
                   if ($i<5){
                       $result.='<li><a href="'.$values[$i]['url'].'">
                           <img src="'.$values[$i]['img'].'" alt="'.$values[$i]['name'].'">
                           <p>'.$values[$i]['name'].'( <span class="ff6600">'.$values[$i]['counts'].'</span>款)</p>
                           </a>
                         </li>'; 
                   }
                   else
                   {   
                      if (($i % 5)===0) $result.='</ul> <ul class="brandfontlist">';
                      $result.='<li><a href="'.$values[$i]['url'].'">
                                    <p>'.$values[$i]['name'].'( <span class="ff6600">'.$values[$i]['counts'].'</span>款)</p>
                                 </a></li>';
                      
                   }
                 }
                 }
                 else
                 {
                    $result.='
                     <div class="title"><p>预计开始日期：'.$value['date_begin'].' -- 结束日期：'.$value['date_end'].'</p></div>                          
                     <ul class="abc-height150px">
                    ';
                    $result.='<li><div style="width:710px;font-size:30px;color:#ddd;height:150px;text-align:center;line-height:150px;">惊喜连连,敬请期待！</div></li>';  
                 }   
                 $result.='</ul><div class="clearfix"></div></div>'; 
                 
             }
                 
          
          return $result;
          
      }  
	
        
        
}
