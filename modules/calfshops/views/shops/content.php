<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-27 
 * @copyright 2011 
 *
 */
?>

<div id="shopslist">
           <div id="snav">您现在的位置：店铺</div>
           <div id="shops_context" class="clearfix"> <!-- begin shops_context -->
              <div class="left"> <!-- begin left -->
                <!-- 热门推荐 -->
                <div class="hot_recommend clearfix"> <!-- begin recommend -->
                	<h2><?php echo $array_data['recommend']['title']; ?></h2>
			    <ul>
		           <?php foreach ($array_data['recommend']['lists'] as $key => $value): ?>		
			      <li><a href="#"><img src="<?php echo $value['img']; ?>" alt="">
				  <span class="bg-title"></span><span class="title"><?php echo $value['name']; ?></span></a></li>
			   <?php endforeach; ?>   
		    </ul>
        	</div> <!-- end recommend -->
              </div>  <!-- end left -->
            
              <div class="right"> <!-- begin right --> 
                <div class="month_ranking"> <!-- begin ranking -->
		    <h2><?php echo $array_data['ranking']['title']; ?></h2>
				    <div class="bd-side">
			            <div class="row">
			             <ol>
				       <?php foreach ($array_data['ranking']['lists'] as $key => $value): ?>
			               <?php $odd = (($key % 2)==0)?'odd':''; ?>
			               <?php $a= array(0,1,2); $high= (array_key_exists($key,$a))?'high':'';        ?>
			
			               <li class="<?php echo $odd; ?>">
				          <a href="#" ><span class="num <?php echo $high; ?>"></span>
					   <span class="name"><?php echo $value['name']; ?></span><strong><?php echo $value['count']; ?></strong> 件</a></li>
				      <?php endforeach; ?>	
			             </ol>
			            </div>
			            <img src="/media/images/g01.png" style="width:232px" />
			        </div>
             	</div> <!-- end ranking -->  
         
			  </div> <!-- end right -->
	
	       </div> <!-- end shops_context -->
             <!-- 新加入品牌 -->
		<div class="new_join clearfix"> <!-- begin join -->
                  
		 <h2><?php echo $array_data['join']['title']; ?><b></b></h2>
                    <div class="bd">
		        <ul class="ul-new clearfix">
			  <?php foreach ($array_data['join']['lists'] as $key => $value): ?>               
			    <li><a href="#"><img src="<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>"></a> 
				<p class="title"><a href="#"><?php echo $value['name']; ?></a></p></li>
			  <?php endforeach; ?>
			  </ul
                       </div>
                  </div> <!-- end join -->
</div>