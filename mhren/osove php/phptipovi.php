<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// naredba define
// osnovni tipovi
// 
define("ORIGIN","https://github.com/matijahren/online2017");
define("UPSTREAM","https://github.com/algebrateam/online2017");
define("PDV", 25);
define("MASTER","master");//ime glavne grane
echo "Pdv u hr je ".PDV."%";
echo "<br>procedura rada s gitom:<br>";

echo "git pull".UPSTREAM." ".MASTER; 