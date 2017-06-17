
<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<form action="" method="post">
	選擇商品:
	<select name="item">
		<option value="S001">10吋平板:$15550</option>
		<option value="S002">15.8吋筆記型電腦:$10234</option>
		<option value="S003">紅米note4:$5000</option>
	</select>
		<input type="text" size="5" name="Quantity" value="1"/>
		<input type="submit" value="訂購"/>
	</form>

</body>
</html>

<?php
session_start();
if(isset($_POST["item"])){
	$item=$_POST["item"];
	$_SESSION["ID"]=$item;
	$_SESSION["quantity"]=$_POST["Quantity"];
	switch($Item){
			case 'A001':
			$_SESSION["name"]="10吋平板";
			$_SESSION["price"]=15550;
			break;
			case 'A002':
			$_SESSION["name"]="15.6吋筆記型電腦";
			$_SESSION["price"]=10234;
			break;
			case 'A003':
			$_SESSION["name"]="紅米note4";
			$_SESSION["price"]=5000;
			break;
	}
	header("Location: savecart.php");
}
?>