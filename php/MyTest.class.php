<?php

require_once "Spider.php";

class MyTest extends Spider{
	
	public function myParse($str = ''){

		$list = array();
		preg_match_all("|<td[^>]*>+(.*)</[td>]+>|U", $str, $list);		

		foreach($list[0] as $key => $l){
			$list[0][$key] = utf8_encode(strip_tags($l));
		}
 		
		return json_encode($list[0]);
	}
}

?>