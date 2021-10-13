<?php
for ( $i = 1; $i <= 100; $i++ )
{
$array_digit =str_split($i);
$sum = array_sum($array_digit);
$last_digit = end($array_digit);
$del3 = is_int($sum/3);
		if ($del3 and ($last_digit==0 or $last_digit==5)) {
			echo "SuperFaktura";
			echo "<br>";

		}
		elseif ($last_digit==0 or $last_digit==5){
			echo "Faktura";
			echo "<br>";

		}
		elseif ($del3  ){
			echo "Super";
			echo "<br>";
		}
		else{
			echo $i;
			echo "<br>";
		}


}
