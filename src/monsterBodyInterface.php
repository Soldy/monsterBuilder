<?php 

interface MonsterBodyInterface {
    public function tag(string $element):bool;
    public function render():string;
}

