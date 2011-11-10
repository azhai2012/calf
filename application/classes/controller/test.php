<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('test');

    }

	public function action_index()
	{	
		parent::before();
	       // $db = MangoDB::instance('default');
	       /*
	    	$array_data= array(
			array('id'=>'1044382','name'=>'川贝雪梨膏','name_code'=>'CBXLG','general_name'=>'川贝雪梨膏','display_name'=>'川贝雪梨膏 120g 襄樊隆中药业有限责任公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'120g','unit'=>'瓶','factory'=>'襄樊隆中药业有限责任公司','factory_code'=>'XFLZYYYXZRGS',
			      'category'=>'中成药','product_type'=>'口服溶液','group'=>'0','certificateNo'=>'国药准字Z42020509'),
			array('id'=>'1044381','name'=>'叶酸片','name_code'=>'YSP','general_name'=>'叶酸片','display_name'=>'叶酸片 04毫克*31片 福建明华药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'04毫克*31片','unit'=>'盒','factory'=>'福建明华药业有限公司','factory_code'=>'FJYYYXGS','category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H19993229'),
			array('id'=>'1044380','name'=>'右美沙芬愈创甘油醚糖浆','name_code'=>'YMSFYCGYMTJ','general_name'=>'右美沙芬愈创甘油醚糖浆','display_name'=>'右美沙芬愈创甘油醚糖浆 100毫升 哈尔滨泰华药业股份有限公司',
			     'general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'100毫升','unit'=>'盒','factory'=>'哈尔滨泰华药业股份有限公司','factory_code'=>'HEBTHYYGFYXGS',
			      'category'=>'化学药制剂','product_type'=>'糖浆','group'=>'0','certificateNo'=>'国药准字H20093608'),
			array('id'=>'1044379','name'=>'诺氟沙星胶囊','name_code'=>'NFSXJN','general_name'=>'诺氟沙星胶囊','display_name'=>'诺氟沙星胶囊 01g*24粒 上海罗福太康药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'01g*24粒','unit'=>'盒','factory'=>'上海罗福太康药业有限公司','factory_code'=>'SHLFTKYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'胶囊剂','group'=>'0','certificateNo'=>'国药准字H41022605'),
			array('id'=>'1044378','name'=>'秋水仙碱片','name_code'=>'QSXJP','general_name'=>'秋水仙碱片','display_name'=>'秋水仙碱片 20片 云南省玉溪望子隆生物制药有限公司','general_price'=>'1.5',
			       'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'20片','unit'=>'盒','factory'=>'云南省玉溪望子隆生物制药有限公司','factory_code'=>'YNSYXWZLSWZYYXGS',
			      'category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H53021904'),
			array('id'=>'1044377','name'=>'板蓝根颗粒','name_code'=>'BLGKL','general_name'=>'板蓝根颗粒','display_name'=>'板蓝根颗粒 10克*22袋 云南省玉溪望子隆生物制药有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'10克*22袋','unit'=>'盒','factory'=>'云南省玉溪望子隆生物制药有限公司','factory_code'=>'YNSYXWZLSWZYYXGS',
			      'category'=>'中成药','product_type'=>'颗粒剂','group'=>'0','certificateNo'=>'国药准字Z53021010'),
			array('id'=>'1044376','name'=>'氨咖黄敏胶囊','name_code'=>'AKHMJN','general_name'=>'氨咖黄敏胶囊','display_name'=>'氨咖黄敏胶囊 10粒*50板 商丘市金马药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'10粒*50板','unit'=>'盒','factory'=>'商丘市金马药业有限公司','factory_code'=>'SQSJMYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'胶嚢剂','group'=>'0','certificateNo'=>'国药准字H41024556'),
			array('id'=>'1044375','name'=>'氨咖黄敏胶囊','name_code'=>'AKHMJN','general_name'=>'氨咖黄敏胶囊','display_name'=>'氨咖黄敏胶囊 10粒*2板 商丘市金马药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'10粒*2板','unit'=>'盒','factory'=>'商丘市金马药业有限公司','factory_code'=>'SQSJMYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'胶嚢剂','group'=>'0','certificateNo'=>'国药准字H41024556'),
			array('id'=>'1044374','name'=>'甲硝唑片','name_code'=>'JXZP','general_name'=>'甲硝唑片','display_name'=>'甲硝唑片 02g*100片 江苏长江药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'02g*100片','unit'=>'瓶','factory'=>'江苏长江药业有限公司','factory_code'=>'JSCJYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H32020347'),
			array('id'=>'1044373','name'=>'罗红霉素胶囊','name_code'=>'LHMSJN','general_name'=>'罗红霉素胶囊','display_name'=>'罗红霉素胶囊 015g*24粒 江苏长江药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'015g*24粒','unit'=>'盒','factory'=>'江苏长江药业有限公司','factory_code'=>'JSCJYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'胶嚢剂','group'=>'0','certificateNo'=>'国药准字H19991023'),
			array('id'=>'1044372','name'=>'替硝唑胶囊','name_code'=>'TXZJN','general_name'=>'替硝唑胶囊','display_name'=>'替硝唑胶囊 025g*10粒 江苏长江药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'025g*10粒','unit'=>'盒','factory'=>'江苏长江药业有限公司','factory_code'=>'JSCJYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'胶嚢剂','group'=>'0','certificateNo'=>'国药准字H20113136'),
			array('id'=>'1044371','name'=>'螺内酯片','name_code'=>'LNZP','general_name'=>'螺内酯片','display_name'=>'螺内酯片 20mg*100s 江苏长江药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'20mg*100s','unit'=>'瓶','factory'=>'江苏长江药业有限公司','factory_code'=>'JSCJYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H20084493'),
			array('id'=>'1044370','name'=>'口腔溃疡含片','name_code'=>'KQKYHP','general_name'=>'口腔溃疡含片','display_name'=>'口腔溃疡含片 08克*10片 海安海欣制药有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'08克*10片','unit'=>'盒','factory'=>'海安海欣制药有限公司','factory_code'=>'HAHXZYYXGS',
			      'category'=>'中成药','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字Z20050167'),
			array('id'=>'1044369','name'=>'氨咖黄敏片','name_code'=>'AKHMP','general_name'=>'氨咖黄敏片','display_name'=>'氨咖黄敏片 12片 贵州科顿制药有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'12片','unit'=>'盒','factory'=>'贵州科顿制药有限公司','factory_code'=>'GZKDZYYXGS',
			      'category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H52020775'),
			array('id'=>'1044368','name'=>'维生素B1注射液','name_code'=>'WSSB1ZSY','general_name'=>'维生素B1注射液','display_name'=>'维生素B1注射液 2ml：01g*10支 湖北制药有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'2ml：01g*10支','unit'=>'盒','factory'=>'湖北制药有限公司','factory_code'=>'HBZYYXGS',
			      'category'=>'化学药制剂','product_type'=>'注射液','group'=>'0','certificateNo'=>'国药准字H42021510'),
			array('id'=>'1044367','name'=>'复方磷酸可待因口服溶液','name_code'=>'FFLSKDYKFRY','general_name'=>'复方磷酸可待因口服溶液','display_name'=>'复方磷酸可待因口服溶液 120ml 南京星银药业集团有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'120ml','unit'=>'盒','factory'=>'南京星银药业集团有限公司','factory_code'=>'NJXYYYJTYXGS',
			      'category'=>'含麻黄碱类复方制剂','product_type'=>'口服液','group'=>'0','certificateNo'=>'国药准字H20057395'),
			array('id'=>'1044366','name'=>'益气养血口服液','name_code'=>'YQYXKFY','general_name'=>'益气养血口服液','display_name'=>'益气养血口服液 10毫升*10支 吉林省银诺克药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'10毫升*10支','unit'=>'盒','factory'=>'吉林省银诺克药业有限公司','factory_code'=>'JLSYNKYYYXGS',
			      'category'=>'中成药','product_type'=>'口服液','group'=>'0','certificateNo'=>'国药准字Z20063861'),
			array('id'=>'1044365','name'=>'脑蛋白水解物片','name_code'=>'NDBSJWP','general_name'=>'脑蛋白水解物片','display_name'=>'脑蛋白水解物片 24s 上海实业联合集团长城药业有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'24s','unit'=>'盒','factory'=>'上海实业联合集团长城药业有限公司','factory_code'=>'SHSYLHJTCCYYYXGS',
			      'category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H31022990'),
			array('id'=>'1044364','name'=>'阿莫西林分散片','name_code'=>'AMXLFSP','general_name'=>'阿莫西林分散片','display_name'=>'阿莫西林分散片 025g*12片*2板 华北制药股份有限公司','general_price'=>'1.5',
			      'create_date'=>'2012-01-01','update_date'=>'2012-01-01 00:00','is_active'=>1,'active_date'=>'2012-01-01',
			      'norm'=>'025g*12片*2板','unit'=>'盒','factory'=>'华北制药股份有限公司','factory_code'=>'HBZYGFYXGS',
			      'category'=>'化学药制剂','product_type'=>'片剂','group'=>'0','certificateNo'=>'国药准字H19991028'),

					);
     //    print_r($array_data);   
	$array_data = array(
		array('id'=>1,'product_id'=>'1044382','area'=>'','price'=>'10.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>2,'product_id'=>'1044381','area'=>'','price'=>'8.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>3,'product_id'=>'1044380','area'=>'','price'=>'9.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>4,'product_id'=>'1044379','area'=>'','price'=>'7.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>5,'product_id'=>'1044378','area'=>'','price'=>'6.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>6,'product_id'=>'1044377','area'=>'','price'=>'5.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>7,'product_id'=>'1044376','area'=>'','price'=>'4.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>8,'product_id'=>'1044375','area'=>'','price'=>'3.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		array('id'=>9,'product_id'=>'1044374','area'=>'','price'=>'2.23','discount_price'=>'9.23','vip_price'=>'8.23'), 
		 
	);	
	foreach ($array_data as $key => $value) {
		# code...
		$db->save('prices',$value);  
	}    */
	  

           
            
   
           /*  excel 

           $ws =Excel::instance(array(
                     'author'       => 'Kohana-PHPExcel',
                     'title'        => 'Report',
                     'subject'      => 'Subject',
                     'description'  => 'Description',
                     'show_header'   => TRUE,
           ));
           
           $r=  $ws->read("/Users/zhaibob/git/calf/media/upload/report.xls");
           
           $rowcount=  $r['rowcount'];
           $columncount = $r['columncount'];
           $rows= $r['rows'];
           for ($i=0; $i <= $rowcount; $i++) { 
           	# code...
               for ($j=0; $j < ; $j++) { 
               	# code...
                  $rows->get 
               }
           }
            
           print_r($r);
         
          /* excel 
          $ws->set_active_sheet(0);
           $as = $ws->get_active_sheet();
           $as->setTitle('Report');

           $as->getDefaultStyle()->getFont()->setSize(9);
            
           $as->getColumnDimension('A')->setWidth(7);
           $as->getColumnDimension('B')->setWidth(50);
           $as->getColumnDimension('C')->setWidth(12);
           $as->getColumnDimension('D')->setWidth(10);
           
           
	   $data = array(
		    0=>array('id'=>1,'name'=>'约翰','age'=>2, 'time'=>'D'),
	            1=>array('id'=>1,'name'=>'John','age'=>2, 'time'=>'D'),
		    2=>array('id'=>2,'name'=>'John','age'=>5, 'time'=>587),
                    3=>array('id'=>3,'name'=>'太棒了', 'age'=>3, 'time'=>981),
                    4=>array('id'=>4, 'name'=>'Anny', 'age'=>1, 'time'=>214)
                  );
          //  print_r($data);
           // foreach ($data AS $key => $value) {
            	 //echo $value;
           // }
           
           
           $data = array(
                   'rows'=>array( 
     	              array('id'=>1,'name'=>'约翰','age'=>2, 'time'=>'D'),
	              array('id'=>1,'name'=>'John','age'=>2, 'time'=>'D'),
		      array('id'=>2,'name'=>'John','age'=>5, 'time'=>587),
                      array('id'=>3,'name'=>'太棒了', 'age'=>3, 'time'=>981),
                      array('id'=>4, 'name'=>'Anny', 'age'=>1, 'time'=>214)
                    )
                );
            */
          // $columns = array('id'=>'编号','name'=>'姓名','age'=>'年龄','time'=>'时间'); 
           	
           //$ws->set_data($data,$columns,TRUE);
	  // $ws->send(array('name'=>'report','format'=>'Excel5'));
          /******* excel  ************/
           /******* excel  ************/

           /* $db = MangoDB::instance('default');
            $query  = array("id"=>"12222"); 
	    $array_data =$db->find_one('products',$query);
	    echo count($array_data); 
            print_r($array_data);
 	    
	    
	
	 /*$p = array('page'=>1,'prepage'=>10,'sortname'=>'id','sortorder'=>'desc','query'=>'','qtype'=>'id');

		$product_db = Calfdb_Admin::execute('Product','',$p);
		$array_data = $product_db->get_admin_product_manager_array_data();
		foreach ($array_data['rows'] AS $key => $value) {
		  echo $value['id'];
		}
	//	print_r($array_data ); 
	
	/*	$product_db = Calfdb_Admin::execute('Product','',array('id'=>"1044372"));
		$array_data = $product_db->get_admin_product_info_array_data();
		foreach ($array_data['rows'] AS $key => $value) {
			# code...
			print_r($value['id']);
		}
		print_r($array_data);
		
	  /*  $details = $db->find('orders_details',array('id'=>121312));  
            $total = $db->count('orders_details',array('id'=>121312));
            $jsonData = array('page'=>1,'total'=>$total,'rows'=>array()); 
            foreach ($details AS $key => $value) {
            	# code...
               
                $products = $db->find_one('products',array('id'=>$value['product_id']));
                $prices =  $db->find_one('prices',array('product_id'=>$value['product_id']));
                $amount = (int)$value['quantity']*(float)$prices['price'];
   
                $ary = array('id'         =>$value['id'],
                           'product_id'   =>$value['product_id'],
                           'display_name' =>$products['display_name'],
                           'unit'         =>$products['unit'],
                           'quantity'     =>$value['quantity'],
                           'price'        =>$prices['price'],  
                           'amount'       =>$amount,
                           'batch'        =>$value['batch'],
                           'validity'     =>$value['validity'],
                          );
                $jsonData['rows'][] = $ary; 
            }
           print_r($jsonData); 
               // $array_data = $db->find('products');

               // print_r($array_data);
        /*
      	$p = array('page'=>1,'prepage'=>10,'sortname'=>'id','sortorder'=>'desc','query'=>'','qtype'=>'id');

	$product_db = Calfdb_Admin::execute('Order','',$p);
	$array_data = $product_db->get_admin_order_list_array_data();
        print_r($array_data);
              foreach ($array_data['rows'] as $id => $value) {
                	# code...
                       echo $value['customer_name'];
                   
	                
	              //  for ($i=0; $i <count($value)-1 ; $i++) { 
	                	# code...
	                //      echo $value[$i]['a'];
	               // }
                     
                     //echo count($value);
                    //echo  $value['_id'];
                    //echo  $id.':'.$value[0]['a'];

                     
                   
                       
                }
                 
                //echo $db;
                // echo $db->count('user');
               
	//	$action = $this->request->action();
	//	echo $action; 
	
		
	
		/*
		$id=1;
		$data=array('mod'=>'order');
		$hots  = Admin_Notice::factory($id,$data);
		$_array_data =  $hots->get_body_content();
		
		$result=$_array_data;
		echo $result;
                
		//$data = Msc::factory();
	
		//echo $data->get_shelf_product_compare_list();
                
                
		
	    /*
		$ary = $data->get('azhai');
		
		if (!isset($ary))
		$ary = array();
		$b= 'c';
		
		if (!in_array($b, $ary))
		{
	   	    $ary = array_values($ary);
			$ary[]=$b; 
  	   	    $data->set('azhai',$ary);
		}
		
		
		print_r($ary);
		//$session= Session::instance()->set('azhai', array('hello azhai','hi','How are you?'));
		
		//print_r($session->get('azhai'));
      //  print_r($data->get_once('azhai'));
		
		
       // $modules= Kohana::modules();
       // print_r($modules);
	   // echo $this->getUtf8('大小');
	   /*echo $this->getTable('a').'<br>';
	   echo $this->getTable('b').'<br>';
	   echo $this->getTable('c').'<br>';
	   
		
	   for($i=0;$i<10000;$i++)
	   {
		echo $i.'   '.$this->getTable($i).'<br>';
	   }
	   */
		//print_r($_POST);
		//$this->template='';
	}
	
	public function after(){
		$this->response->body($this->template);
	}
	
	

} // End Welcome