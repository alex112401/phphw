<meta http-equiv="Content-Type" content="text/html;	charset=utf-8"/>

<?php

	$endtime=date_create('2017-12-31 0:0:0');
	$nowtime=date_create(date('Y-m-d'));
	$mon=date('m');


	echo "<img src=\"".$mon.".jpg\">","<br>"; 
	$now=date('Y-m-d h:i:s');
	$end=date('2017-12-31 0:0:0');
	echo date('Y年m月d日 l h時i分s秒'),"<br>";



	$diff=date_diff($nowtime,$endtime);
	#%a天數
	echo "離世界末日剩下：",$diff->format("%a days"),"<br>";



	$difm=12-date('m');
	$dify=2017-date('Y');



	if(date('m')==1||date('m')==3||date('m')==5||date('m')==7||date('m')==8||date('m')==10||date('m')==12){
		$difd=31-date('j');
	}
	elseif(date('m')==2 && date('y')%4!=0){
		$difd=28-date('j');
	}
	elseif(date('m')==2 && date('y')%4==0){
		$difd=29-date('j');
	}
	else{
		$difd=30-date('j');
	}




	echo "離世界末日剩下：".$dify."年".$difm."月".$difd."日"."<br>";


	$difs=floor((strtotime($end)-strtotime($now)));
	$difs=floor((strtotime($end)-strtotime($now)));
	echo "離世界末日剩：",(int)($difs/86400),"天";
	echo (int)(($difs%86400)/3600),"時";
	echo (int)((($difs%86400)%3600)/60),"分";
	echo (int)(((($difs%86400)%3600)%60)),"秒";

	?>