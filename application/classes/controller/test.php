<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {


	private  $template='';
	
    public function before(){
		$this->template= View::factory('test');

    }
	
    function getUtf8($_str){
		$modcomm=new Model_Comm();
		return $modcomm->utf8Escape($_str);
	}
	
    function getTable( $uid ){
        //$ext =  substr(md5($uid),0,2);
        //return "user_".$ext;
        return "user_" . sprintf( "%04d", ($uid >> 20) );
    }
	
 public function error($message){
	$this->response->status(404);
}


function Pinyin($_String, $_Code='gb2312',$isInitial=false)  
{  
$_DataKey = "a|ai|an|ang|ao|ba|bai|ban|bang|bao|bei|ben|beng|bi|bian|biao|bie|bin|bing|bo|bu|ca|cai|can|cang|cao|ce|ceng|cha".  
"|chai|chan|chang|chao|che|chen|cheng|chi|chong|chou|chu|chuai|chuan|chuang|chui|chun|chuo|ci|cong|cou|cu|".  
"cuan|cui|cun|cuo|da|dai|dan|dang|dao|de|deng|di|dian|diao|die|ding|diu|dong|dou|du|duan|dui|dun|duo|e|en|er".  
"|fa|fan|fang|fei|fen|feng|fo|fou|fu|ga|gai|gan|gang|gao|ge|gei|gen|geng|gong|gou|gu|gua|guai|guan|guang|gui".  
"|gun|guo|ha|hai|han|hang|hao|he|hei|hen|heng|hong|hou|hu|hua|huai|huan|huang|hui|hun|huo|ji|jia|jian|jiang".  
"|jiao|jie|jin|jing|jiong|jiu|ju|juan|jue|jun|ka|kai|kan|kang|kao|ke|ken|keng|kong|kou|ku|kua|kuai|kuan|kuang".  
"|kui|kun|kuo|la|lai|lan|lang|lao|le|lei|leng|li|lia|lian|liang|liao|lie|lin|ling|liu|long|lou|lu|lv|luan|lue".  
"|lun|luo|ma|mai|man|mang|mao|me|mei|men|meng|mi|mian|miao|mie|min|ming|miu|mo|mou|mu|na|nai|nan|nang|nao|ne".  
"|nei|nen|neng|ni|nian|niang|niao|nie|nin|ning|niu|nong|nu|nv|nuan|nue|nuo|o|ou|pa|pai|pan|pang|pao|pei|pen".  
"|peng|pi|pian|piao|pie|pin|ping|po|pu|qi|qia|qian|qiang|qiao|qie|qin|qing|qiong|qiu|qu|quan|que|qun|ran|rang".  
"|rao|re|ren|reng|ri|rong|rou|ru|ruan|rui|run|ruo|sa|sai|san|sang|sao|se|sen|seng|sha|shai|shan|shang|shao|".  
"she|shen|sheng|shi|shou|shu|shua|shuai|shuan|shuang|shui|shun|shuo|si|song|sou|su|suan|sui|sun|suo|ta|tai|".  
"tan|tang|tao|te|teng|ti|tian|tiao|tie|ting|tong|tou|tu|tuan|tui|tun|tuo|wa|wai|wan|wang|wei|wen|weng|wo|wu".  
"|xi|xia|xian|xiang|xiao|xie|xin|xing|xiong|xiu|xu|xuan|xue|xun|ya|yan|yang|yao|ye|yi|yin|ying|yo|yong|you".  
"|yu|yuan|yue|yun|za|zai|zan|zang|zao|ze|zei|zen|zeng|zha|zhai|zhan|zhang|zhao|zhe|zhen|zheng|zhi|zhong|".  
"zhou|zhu|zhua|zhuai|zhuan|zhuang|zhui|zhun|zhuo|zi|zong|zou|zu|zuan|zui|zun|zuo";  
  
$_DataValue = "-20319|-20317|-20304|-20295|-20292|-20283|-20265|-20257|-20242|-20230|-20051|-20036|-20032|-20026|-20002|-19990".  
"|-19986|-19982|-19976|-19805|-19784|-19775|-19774|-19763|-19756|-19751|-19746|-19741|-19739|-19728|-19725".  
"|-19715|-19540|-19531|-19525|-19515|-19500|-19484|-19479|-19467|-19289|-19288|-19281|-19275|-19270|-19263".  
"|-19261|-19249|-19243|-19242|-19238|-19235|-19227|-19224|-19218|-19212|-19038|-19023|-19018|-19006|-19003".  
"|-18996|-18977|-18961|-18952|-18783|-18774|-18773|-18763|-18756|-18741|-18735|-18731|-18722|-18710|-18697".  
"|-18696|-18526|-18518|-18501|-18490|-18478|-18463|-18448|-18447|-18446|-18239|-18237|-18231|-18220|-18211".  
"|-18201|-18184|-18183|-18181|-18012|-17997|-17988|-17970|-17964|-17961|-17950|-17947|-17931|-17928|-17922".  
"|-17759|-17752|-17733|-17730|-17721|-17703|-17701|-17697|-17692|-17683|-17676|-17496|-17487|-17482|-17468".  
"|-17454|-17433|-17427|-17417|-17202|-17185|-16983|-16970|-16942|-16915|-16733|-16708|-16706|-16689|-16664".  
"|-16657|-16647|-16474|-16470|-16465|-16459|-16452|-16448|-16433|-16429|-16427|-16423|-16419|-16412|-16407".  
"|-16403|-16401|-16393|-16220|-16216|-16212|-16205|-16202|-16187|-16180|-16171|-16169|-16158|-16155|-15959".  
"|-15958|-15944|-15933|-15920|-15915|-15903|-15889|-15878|-15707|-15701|-15681|-15667|-15661|-15659|-15652".  
"|-15640|-15631|-15625|-15454|-15448|-15436|-15435|-15419|-15416|-15408|-15394|-15385|-15377|-15375|-15369".  
"|-15363|-15362|-15183|-15180|-15165|-15158|-15153|-15150|-15149|-15144|-15143|-15141|-15140|-15139|-15128".  
"|-15121|-15119|-15117|-15110|-15109|-14941|-14937|-14933|-14930|-14929|-14928|-14926|-14922|-14921|-14914".  
"|-14908|-14902|-14894|-14889|-14882|-14873|-14871|-14857|-14678|-14674|-14670|-14668|-14663|-14654|-14645".  
"|-14630|-14594|-14429|-14407|-14399|-14384|-14379|-14368|-14355|-14353|-14345|-14170|-14159|-14151|-14149".  
"|-14145|-14140|-14137|-14135|-14125|-14123|-14122|-14112|-14109|-14099|-14097|-14094|-14092|-14090|-14087".  
"|-14083|-13917|-13914|-13910|-13907|-13906|-13905|-13896|-13894|-13878|-13870|-13859|-13847|-13831|-13658".  
"|-13611|-13601|-13406|-13404|-13400|-13398|-13395|-13391|-13387|-13383|-13367|-13359|-13356|-13343|-13340".  
"|-13329|-13326|-13318|-13147|-13138|-13120|-13107|-13096|-13095|-13091|-13076|-13068|-13063|-13060|-12888".  
"|-12875|-12871|-12860|-12858|-12852|-12849|-12838|-12831|-12829|-12812|-12802|-12607|-12597|-12594|-12585".  
"|-12556|-12359|-12346|-12320|-12300|-12120|-12099|-12089|-12074|-12067|-12058|-12039|-11867|-11861|-11847".  
"|-11831|-11798|-11781|-11604|-11589|-11536|-11358|-11340|-11339|-11324|-11303|-11097|-11077|-11067|-11055".  
"|-11052|-11045|-11041|-11038|-11024|-11020|-11019|-11018|-11014|-10838|-10832|-10815|-10800|-10790|-10780".  
"|-10764|-10587|-10544|-10533|-10519|-10331|-10329|-10328|-10322|-10315|-10309|-10307|-10296|-10281|-10274".  
"|-10270|-10262|-10260|-10256|-10254";  
$_TDataKey = explode('|', $_DataKey);  
$_TDataValue = explode('|', $_DataValue);  
  
$_Data = (PHP_VERSION>='5.0') ? array_combine($_TDataKey, $_TDataValue) : _Array_Combine($_TDataKey, $_TDataValue);  
arsort($_Data);  
reset($_Data);  
  
if($_Code != 'gb2312') $_String = $this->_U2_Utf8_Gb($_String);  
$_Res = '';  
for($i=0; $i<strlen($_String); $i++)  
{  
$_P = ord(substr($_String, $i, 1));  
if($_P>160) { $_Q = ord(substr($_String, ++$i, 1)); $_P = $_P*256 + $_Q - 65536; }  
$_Res .= $this->_Pinyin($_P, $_Data,$isInitial);  
}  
return preg_replace("/[^a-z0-9]*/", '', $_Res);  
}  
  
function _Pinyin($_Num, $_Data,$isInitial)  
{  
if ($_Num>0 && $_Num<160 ) return chr($_Num);  
elseif($_Num<-20319 || $_Num>-10247) return '';  
else {  
foreach($_Data as $k=>$v){ if($v<=$_Num) break; }  
if($isInitial)  
    $k=substr($k,0,1);//是否只显示首写  
return $k;  
  
}  
}  
  
function _U2_Utf8_Gb($_C)  
{  
$_String = '';  
if($_C < 0x80) $_String .= $_C;  
elseif($_C < 0x800)  
{  
$_String .= chr(0xC0 | $_C>>6);  
$_String .= chr(0x80 | $_C & 0x3F);  
}elseif($_C < 0x10000){  
$_String .= chr(0xE0 | $_C>>12);  
$_String .= chr(0x80 | $_C>>6 & 0x3F);  
$_String .= chr(0x80 | $_C & 0x3F);  
} elseif($_C < 0x200000) {  
$_String .= chr(0xF0 | $_C>>18);  
$_String .= chr(0x80 | $_C>>12 & 0x3F);  
$_String .= chr(0x80 | $_C>>6 & 0x3F);  
$_String .= chr(0x80 | $_C & 0x3F);  
}  
return iconv('UTF-8', 'GB2312', $_String);  
}  
  
function _Array_Combine($_Arr1, $_Arr2)  
{  
for($i=0; $i<count($_Arr1); $i++) $_Res[$_Arr1[$i]] = $_Arr2[$i];  
return $_Res;  
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
	  
	
	
	     //   $array_data = array(array('a'=>1),array('a'=>2),array('a'=>3),);
	   //     $db->save('products',$array_data);   */
	 //"amount" : "10.00", "batch" : "20100101", "create_date" : "2011-01-01 03:00", "discount_id" : "", "flows" : 1, "id" : 121312, "product_id" : "1044380", "quantity" : 30, "rowid" : 3, "validity" : "201201" 
	  
	
	    //echo Pinyin::instance()->getInitials('复方磷酸可待因口服溶液');
          
            $db = MangoDB::instance('default');
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