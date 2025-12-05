<?php
$serverinimi = "localhost";
$kasutajanimi = "airon";
$parool = 'Pelmeen';
$andmebaasinimi = "airon";
$yhendus=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset("utf8");

/*
$serverinimi = "d141163sd613569 ";
$kasutajanimi = "d141163_airon";
$parool = 'SkibidiSigma12.';
$andmebaasinimi = "d141163_airon";
$yhendus=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset("utf8");*/