<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Utf {

	function utf2ucs($str){
		$n=strlen($str);
		if ($n=3){
			$highCode =ord($str[0]);
			$midCode = ord($str[1]);
			$lowCode = ord($str[2]);
			$a = 0x1F & $highCode;
			$b = 0x7F & $midCode;
			$c = 0x7F & $lowCode;
			$ucsCode =(64*$a+$b)*64+$c;
		}
		elseif ($n==2){
			$highCode = ord($str[0]);
			$lowCode = ord($str[1]);
			$a = 0x3F&$highCode;
			$b = 0x7F&$lowCode;
			$ucsCode =64*$a+$b;
		}
		elseif($n==1){
			$ucscode = ord($str);
		}
		return  dechex($ucsCode);
	}

	function utf8Escape($str){
		preg_match_all( "/[\xC0-\xE0].|[\xE0-\xF0]..|[\x01-\x7f]+/ ",$str,$r);
		$ar = $r[0];
		foreach($ar as $k=> $v)   {
			$ord=ord($v[0]);
			if($ord <=0x7F)
			$ar[$k]=rawurlencode($v);
			elseif   ($ord <0xE0)   {
				$ar[$k] ="\u".$this->utf2ucs($v);
			}
			elseif   ($ord <0xF0)   {
				$ar[$k]="\u".$this->utf2ucs($v);
			}
		}
		return join("",$ar);
	}

}
