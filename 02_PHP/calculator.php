<?php
$arr = array(6,6);
$avg = (!empty($arr) ? array_sum($arr) / count($arr) : 0);
var_dump($avg);
?>