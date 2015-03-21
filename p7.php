<?php

	$test = new Single_linked_list;

	for($i=0;$i<10;$i++){
		$test->insert($i);
	}
	print_r($test->head);

	class Single_linked_list{
		var $head;

		function insert($data){
			$temp = &$this->head;
			while(isset($temp['data'])||$temp['data']){
				$temp = &$temp['addr'];
			}
			$temp = array('data'=>$data,'addr'=>0);
			//print_r($temp);

		}

	}
?>