<?php
	
	for ($i=0; $i <6 ; $i++) { 
		for ($j=0; $j <6 ; $j++) { 
			# code...
			if ($j<2 && $i<1 )
				{
					$arr[$j][$i]=1;
					$prev[]=$arr[$j][$i];
				}

			else
				{
					$arr[$j][$i]=$prev[count($prev)-1]+$prev[count($prev)-2];
					$prev[]=$arr[$j][$i];
				}

		}
	
		# code...
	}
	
	$s=0;
	 for ($i=0, $j=5; $i<6; $i++,$j--)
            $s += $arr[$i][$j];

     echo "Sum= " .$s;
?>