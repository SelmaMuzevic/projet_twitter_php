<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Tamagochi.php';
$tama = new Tamagochi(100, 200, 150, 300);

$tama->showEtat();

$tama->nourrir();
$tama->showEtat();

$tama->dormir();
$tama->showEtat();

$tama->laver();
$tama->showEtat();

$tama->jouer();
$tama->showEtat();
