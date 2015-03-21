<?php
	if(isset($_POST["pay"])){
		$sum = _compound($_POST["sum"],$_POST["interest"]/100,$_POST["period"]);
		echo $sum;
	}


	function compound($a, $r, $p){
		$result = $a*(1+$r)*(pow(1+$r,$p)-1)/$r;
		return $result;
	}

?>


<form actoin="p4.php" method="post">
	interest rate : <input type="text" name="interest">%<br/>
	period : <input type="text" name="period"> month<br/>
	sum : <input type="text" name="sum"><br/>
	<input type="submit" value="enter">
</form>