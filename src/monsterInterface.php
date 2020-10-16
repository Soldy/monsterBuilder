<?php 


interface MonsterInterface {
    public $debug;
    public $header;
    public $body;
    public function render(): string ;
}
