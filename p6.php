<?php
	$head = array('Data'=>0, 'addr'=>0);
	$temp = &$head;
	for($i=1;$i<10;$i++){
		$temp['addr'] = array('Data'=>$i, 'addr'=>0);
		$temp = &$temp['addr'];
	}
	print_r($head);
?>


<form actoin="p6.php" method="post">
	push : <input type="text" name="push"><br/>
	<input type="submit" value="enter">
</form>