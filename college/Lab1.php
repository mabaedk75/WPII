<!DOCTYPE html>
<html>
<head>
	<style>
		body {
	  background-color: #f4b6c2;
	}
	div {
		height:1000px;
	    background: linear-gradient(to bottom right, #f4b6c2 18%,#eee3e7 82%);
	    background-color : #ffffff;
	}
	h1 {
	  color: black;
	  text-shadow: -1px 0 #ffffff, 0 1px #ffffff, 1px 0 #ffffff, 0 -1px #ffffff;
	}
</style>
	</head>
<body><div>
	<?php  
	echo "<center><h1>STRONG OR NAHHH!</h1></center>";
	echo "<hr>";
	echo "<i>Checking whether our number is even or odd and strong or not</i>.<br>";
	//strong number and even or odd 
	$num = array(145,56,78);
	$sum = 0;

	foreach ($num as $n){
		$tmp = $n;
		if($n%2==0){
				echo "$tmp is<font color=green size=4pt> even </font> &";
			}
			else
				echo "$tmp is<font color=#ff3377 size=4pt> odd </font> &";
		while ($n != 0)
		{
		    $remainder = $n % 10;
		    $sum = $sum + factorial($remainder);
		    $n = (int)($n / 10);
		}
		if ($sum == $tmp)
		    echo "<font color=blue size=4pt> a strong number.</font><br />";
		else
		    echo  " not a strong number.<br />";
	}   
		                 
		function factorial($n)
		{
		    $fact = 1;
		  
		    for ($i = 2; $i <= $n; $i++)
		        $fact = $fact * $i;
		  
		    return $fact;
		}
	?>
</div>
</body>
</html>