<?php

$id=$_GET["id"];


if (isset($_GET["id"])){
	while(list($name,$value)=each($_COOKIE[$id])){
		setcookie($id."[".$name."]","",time()-3600);
	}
}

echo "三秒後跳轉";
header("Refresh:3;url=shoppingcart.php");

?>