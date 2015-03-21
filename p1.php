<?php

	$os = array("Mac", "NT", "Irix", "Linux");
	if (_in_array("Irix", $os)) {
	    echo "Got Irix";
	}
	if (_in_array("Mac", $os)) {
	    echo "Got mac";
	}


	function _in_array($needle, $trg){
		$temp = array_values($trg);

		if(is_string($trg)){
			for($i=0;$i<count($temp);$i++){
				if(!strcmp($temp[$i],$needle)){
					return true;
				}
			}
		}
		else{
			for($i=0;$i<count($temp);$i++){
				if($temp[$i]==$needle){
					return true;
				}
			}
		}
		return false;
	}


	exit;

	$array = array("size"=>"XL", "color"=>"gold");
	print_r(_array_value($array));


	function _array_value($input){
		$keys = array_keys($input);
		$result = array();
		for($i=0;$i<count($keys);$i++){
			array_push($result,$input[$keys[$i]]);
		}
		return $result;
	}


	exit;





	$input = array("a","b","c","d","e");
	$output = _array_slice($input,2);
	print_r($output);
	

	function _array_slice($input, $offset, $length=0){

		$result = array();
		if($offset<0){
			$offset = count($input)+$offset;
		}
		if($length<0){
			$offset = $offset + $length;
			$length*=(-1);
		}
		for($i=0;$i<$offset;$i++){
			array_shift($input);
		}
		return $input;

	}


	exit;

	$array1 = array("color" => "red", 2, 4);
	$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
	$result = _array_merge($array1, $array2);
	print_r($result);


	function _array_merge($a, $b){
		$temp1 = array_keys($a);
		$temp2 = array_keys($b);

		$index = 0;
		for($i=0;$i<count($temp1);$i++){
			for($j=0;$j<count($temp2);$j++){
				if(!strcmp($temp1[$i],$temp2[$j]) && is_string($temp1[$i]) ){
					$a[$temp1[$i]] = $b[$temp2[$j]];
					unset($temp2[$j]);
					//print_r($b);
				}
			}
			if(!is_string($temp1[$i]))
				$index = $temp1[$i];

		}
		$i = 1;
		for($j=0;$j<count($temp2);$j++){
			if(is_string($temp2[$j])){
				$a[$temp2[$j]] = $b[$temp2[$j]];

			}
			else{
				$a[$index+$i] = $b[$temp2[$j]];
				$i++;
			}
		}
		return $a;
	}

	exit;

	$test_arr = array(1,2,3,4,5);
	print_r(_array_map("cube",$test_arr));

	function _array_map($callback, $arr){
		$result = array();
		do{
			$temp = array_shift($arr);
			if($temp==NULL)
				break;
			array_push($result,call_user_func($callback,$temp));
			

		}while(1);

		return $result;
	}

	function cube($n){

		$result = $n;
		return $result;
	}


	exit;


	$array = array(0 => 100, "color" => "red");
	print_r(_array_keys($array,"color"));

	function _array_keys($arr, $trg=NULL){
		$result = array();
		do{
			$ea = each($arr);
			if($ea==NULL)
				break;

			if($trg==NULL)
				array_push($result,$ea["key"]);

			else if(!strcmp($ea["key"],$trg)){
				array_push($result,$ea["key"]);
			}
		}while(array_shift($arr) !=NULL);
		return $result;
	}

#test1
?>

