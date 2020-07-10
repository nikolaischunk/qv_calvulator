CREATE DATABASE qv;
DEFAULT CHARACTER SET utf8;

CREATE TABLE ipa(
note char(6),

);


CREATE TABLE informatikkompetenzen(
note char(6),

);


CREATE TABLE erweiterte_grundkompetenzen(
note char(6),

);


CREATE TABLE allgemeinbildung(
note char(6),

);



<?php
$arr = array(6,6);
$avg = (!empty($arr) ? array_sum($arr) / count($arr) : 0);
var_dump($avg);
?>