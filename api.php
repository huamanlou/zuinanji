<?php
$S_KEY = 'zuinanji!@#123';

$k = $_GET['k'];
$t = $_GET['t'];

if($t != md5($k.$S_KEY)){
	echo '该产品为假冒伪劣产品';die;
}


echo 11;