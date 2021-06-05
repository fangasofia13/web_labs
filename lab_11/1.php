<?php 
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $h = $_GET['h'];
    $k = $_GET['k'];
    $s = $_GET['s'];
    $r = $_GET['r'];
    $res =  sqrt(pow($r,2) + $k*log10($s)) + pow(tan($h),2);
    echo $res;
}
?>.