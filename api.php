<?php
$S_KEY = 'zuinanji!@#123';

$k = $_GET['k'];
$t = $_GET['t'];

if($t != md5($k.$S_KEY)){
	echo '�ò�ƷΪ��ðα�Ӳ�Ʒ';die;
}


echo 11;