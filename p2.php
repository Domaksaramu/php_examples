<?php

if(isset($_POST["number1"])&&isset($_POST["number2"]))
	{
	$a = str_split($_POST["number1"]);
	$b = str_split($_POST["number2"]);
	
	$len_a = count($a);
	$len_b = count($b);
	$temp1 = array();
	$temp2 = array();

	for($i=0;$i<$len_a;$i++){
		for($j=0;$j<$len_b;$j++){
			array_push($temp2,$j);
		}
		array_push($temp1,$temp2);
	}


	for($i=0;$i<$len_a;$i++){
		for($j=0;$j<$len_b;$j++){
			if($i==0||$j==0){
				$temp1[$i][$j]==0;
			}
			else if($a[$i-1]==$b[$j-1]){
				$temp1[$i][$j] = 1 + $temp1[$i-1][$j-1];
			}
			else{
				if($temp1[$i-1][$j]>$temp1[$i][$j-1]){
					$temp1[$i][$j] = $temp1[$i-1][$j];
				}
				else{
					$temp1[$i][$j] = $temp1[$i][$j-1];
				}
			}
		}
	}
	print_lcs($a,$b,$len_a,$len_b,$temp1);


	
	
}
function print_lcs($a,$b,$i,$j,$temp){
		if($i==0||$j==0){
			return;
		}
		else if($a[$i-1]==$b[$j-1]){
			echo $a[$i-1];
			print_lcs($a,$b,$i-1,$j-1,$temp);
		}
		else if($temp[$i-1][$j] > $temp[$i][$j-1]){
			print_lcs($a,$b,$i-1,$j,$temp);
		}
		else{
			print_lcs($a,$b,$i,$j-1,$temp);
		}
	}
?>


<form actoin="p6.php" method="post">
	value1 : <input type="text" name="number1"><br/>
	value2 : <input type="text" name="number2"><br/>
	<input type="submit" value="enter">
</form>