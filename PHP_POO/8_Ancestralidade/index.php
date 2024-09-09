<?php
    class Humano{
    
    }
    class Animal{

    }
    class Professor extends Humano{

    }

    $marcos = new Humano;

    $buti = new Animal;

    $pedro = new Professor;

    if($marcos instanceof Humano){
        echo "É humano \n";
    }else{
        echo "N é humano \n";
    }

    if($buti instanceof Animal){
        echo "É animal \n";
    }else{
        echo "N é animal \n";
    }
    
    if($pedro instanceof Professor){
        echo "Pedro é professor \n";
    }else{
        echo "Pedro n é professor \n";
    }

    if($pedro instanceof Humano){
        echo "Pedro é humano \n";
    }else{
        echo "Pedro n é humano \n";
    }