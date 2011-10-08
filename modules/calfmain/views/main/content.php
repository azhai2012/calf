<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-26 
 * @copyright 2011 
 *
 */
?>
<div id="desktop" class="clearfix">
	<div id="dleft" class="w720"> <!-- begin left -->
               <script src="/media/js/jquery.bxSlider.min.js" type="text/javascript" async=""></script>
               <script src="/media/js/main.js" type="text/javascript" async=""></script>		         
           <ul id="slider" class="images clearfix" >
	      <?php foreach ($array_data['slider'] as $key => $value): ?>
		<li><img src="<?php echo $value['img']; ?>" width="<?php echo $value['width']; ?>" height="<?php echo $value['height']; ?>" title="<?php echo $value['title']; ?>"></li>
	      <?php endforeach; ?> 
            </ul>

         </div>	<!-- end left -->
          
         <div id="dright" class="w250"> <!-- begin right -->
	        <div id="report" class="m" > <!-- begin report -->
		      <div class="rt"> <!-- begin rt -->
			<ul class="notice">
			  <li><a href="/gonggao" id="ic" title="公告资讯">公告</a></li>
                          <li><a href="/login" id="login" title="登录" style="padding-left:10px;">登录</a></li>
                          <li><a href="/news" id="notice" title="">新闻</a></li>
                        </ul>
		      </div> <!-- end rt -->
		      <div class="rc" style="width:246px;"> <!-- begin rc -->
                         <ul class="rclist">
	                    <?php foreach ($array_data['notice'] as $key => $value): ?>
		  	    <li><a href="<?php echo $value['url']; ?>" target="_blank" title="<?php echo $value['title']; ?>"><span><?php echo $value['title']; ?></span></a></li> 
		            <?php endforeach; ?>
		          </ul>
		
      		         <div id="info" class="clearfix"> <!-- begin tuan -->
	                     <?php foreach ($array_data['info'] as $key => $value): ?>
                               <?php echo $value['content']; ?>
                             <?php endforeach; ?>
                         </div> <!-- end tuan -->
                      </div> <!-- end rc -->
           </div> <!-- end report -->
       </div> <!-- end right -->
</div>
<?php echo $get_content_new_products.$get_content_hot_products; ?>