<?php

/*

CLI ģʽ �µ�
fwrite(STDOUT, "Enter your name: ");

// get input
$name = trim(fgets(STDIN));

// write input back
fwrite(STDOUT, "Hello, $name!");
*/


$ip='127.0.0.1';
$u='tmlsoftabc';
$p='123456';
$db='nydb29';
$con = mysql_connect($ip , $u , $p);


if(!$con){
	die("could not connect to the database:</br>".mysql_error());//������Ӵ���
}

$query="SELECT * FROM `user` LIMIT 3 ";//������ѯ���
$result=mysql_db_query($db, $query, $con);


$arr = mysql_fetch_row($result);


$msg ='���Ƕ�ʱ����� ������� ʱ�䣺'.date('Y-m-d H:i:s' , time()).' _ '.var_export
($arr , true);


$filename = 'timedtask';

error_log(
	$msg.chr(13).chr(10)
	,3,"E:/nbm/work/php/systemui/Admin/cmd/".$filename.'.log');
	
	
?>