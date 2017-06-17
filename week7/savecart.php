<?php


session_start();
if(isset($_SESSION["ID"])){
		$id=$_SESSION["ID"];
		$name=$_SESSION["name"];
		$price=$_SESSION["price"];
		$quantity=$_SESSION["quantity"];


		setcookie($id."[id]",$id,time()+7200);
		setcookie($id."[name]",$name,time()+7200);
		setcookie($id."[price]",$price,time()+7200);
		setcookie($id."[quantity]",$quantity,time()+7200);
}

header("Location: shoppingcart.php")

?>