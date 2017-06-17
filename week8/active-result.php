<?php
$link = @mysqli_connect('localhost','root','cc11242','phphw');
if($link){
	echo "DB Connected!";
}
else{
	echo "DB Connection Failed";
}

$uname=$_POST["uname"];
$gender=$_POST["gender"];
$ID=$_POST["ID"];
$list=$_POST["list"];
$inter=$_POST["inter"];
$myallinter=implode(",", $inter);
$sugest=$_POST["sugest"];

echo "你的名字：".$uname."</br>";
echo "性別：".$gender."</br>";
echo "身分證：".$ID."</br>";
echo "住哪：".$list."</br>";
echo "興趣是：".$myallinter."</br>";
echo "有什麼建議：".$sugest."</br>";

$sql="INSERT INTO hw5 (name,gender,ID,myallinter,sugest) VALUES ('$uname','$gender','$ID','$list','$myallinter','$sugest')";

$result=mysqli_query($link,$sql);
$result=mysqli_query($link,"SELECT * FROM hw5");

echo "<table border=1>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["gender"];
		echo "</td><td>";
		echo $row["ID"];
		echo "</td><td>";
		echo $row["myallinter"];
		echo "</td><td>";
		echo $row["sugest"];
		echo "</td>";
}
echo "</tr>";

?>
