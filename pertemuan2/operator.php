<?php 
//operator 
//aritmatika atau semua yang berhubungan dengan mtematika

echo 1 + 1;

$x = 10;
$y = 20;

echo $x * $y;

//operator penggabung string
// operatornya titik (.)

$nama_depan = "chairil";
$nama_belakang = "hilman syah";

echo $nama_depan." ".$nama_belakang;

//operator assigment
// = , += , -=, /=, %=, .=

$r= 1;
$r += 5;

echo $r;

$nama = "chairil";
$nama .= " ";
$nama .= "syah";
echo $nama;

//operator perbandingan
// <, >, <=, >=, ==, !=

var_dump(1<5);
var_dump(1=="1");

//identitas 
//===, !==
var_dump(1==="1");

//operator logika
//&&, ||, !
$t=10;
var_dump($t< 20 && $t % 2 == 0);


 ?>