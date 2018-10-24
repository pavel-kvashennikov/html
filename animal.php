<?php
include 'animals/bird/bird.php';
include 'animals/fish/fish.php';
include 'animals/mlek/mlek.php';
include 'animals/presm/presm.php';

class Zoopark{

    public $count;
    public $staya;
    public $zamok;
    public $govor;

    public function say(){
        echo("ШУм зоопарка");
    }

    public function kol(){
        echo("Количество зверей вида = $count");
    }

    public function isStaya(){
        if ($staya == 1){
            echo("Это животное в стае");
        } else {
            echo("Это животное не в стае");
        };
    }

    public function iszamok(){
        if ($zamok == 1){
            echo("Замок закрыт");
        } else {
            echo("Замок открыт");
        }
    }

    public function isgovor(){
        if ($govor == 1){
            echo("Говоит");
        } else {
            echo("Не говорит");
        }
    }
}
?>