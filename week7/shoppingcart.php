
<?php

$total=0;



while( list($arr,$value) = each($_COOKIE)){
	if(isset($_COOKIE[$arr])&&is_array($_COOKIE[$arr])){
		echo "<a href='delete.php?id=$arr'>刪除</a>";
			while(list($name,$value) = each($_COOKIE[$arr])){		
				if($name=="name"){
					echo $value." ";
				}elseif($name=="price"){
					$price=$value;
					echo $value," ";
				}elseif($name=="quantity"){
					$quantity=$value;
					echo $value," ";
				}		
			}
		$total+=$price * $quantity;
		echo "<br>";
	}
}



echo "總共蓋買金額:",$total,"<br>";
echo "<a href='catalog.php'>商品目錄</a>";


?>