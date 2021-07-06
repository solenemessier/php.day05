<?php
class Animal {
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    private $name;
    private $legs;
    private $type;
    public function __construct ($name,$legs,$type) {
        $this->name = $name;
        $this->legs = $legs;
        switch ($type) {
            case Animal::MAMMAL:
                $this->type = "MAMMAL";
                break;
            case Animal::FISH:
                $this->type = "FISH";
                break;
            case Animal::BIRD:
                $this->type = "BIRD";
                break;
        }
    }
    public function getName () {
        return $this->name;
    }
    public function getLegs () {
        return $this->legs;
    }
    public function getType () {
        return $this->type;
    }
}
?>