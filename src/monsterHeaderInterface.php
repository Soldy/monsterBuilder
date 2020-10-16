<?php 

interface MonsterHeaderInterface {
    public function css(string $cssFile):bool;
    public function js(string $jsFile):bool;
    public function title(string $title):bool;
    public function render():string;
}

