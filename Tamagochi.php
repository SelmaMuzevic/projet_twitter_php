<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tamagochi
 *
 * @author selma
 */
class Tamagochi {
    private $faim;
    private $joie;
    private $sommeil;
    private $hygiène;
    
    public function __construct($faim, $joie, $sommeil, $hygiène){
        $this->faim = $faim;
        $this->joie = $joie;
        $this->sommeil = $sommeil;
        $this->hygiène = $hygiène;
    }
    
    public function jouer(){
        $this->joie*=2;
        $this->sommeil+=10;
        $this->faim+=5;
    }
    
    public function laver(){
        $this->hygiène+=15;
    }
    
    public function dormir(){
        $this->sommeil=0;
    }
    
    public function nourrir(){
        $this->faim-=10;
        $this->joie*=2;
        $this->sommeil+=10;
        $this->hygiène-=5; 
    }
    
    public function showEtat(){
        echo '<p>faim:'.$this->faim.'</p>';
        echo '<p>joie:'.$this->joie.'</p>';
        echo '<p>hygiène:'.$this->hygiène.'</p>';
        echo '<p>sommeil:'.$this->sommeil.'</p>';
        echo '</br>';
    }
}
