<?php
    /*Здоровье персонажа не может быть больше 100 ед.*/
    class Human{
        private $name;
        public $lastname;
        public $age;
        private $hp;

        /**
         * Human constructor.
         * @param $name
         * @param $lastname
         * @param $age
         */
        public function __construct($name, $lastname, $age){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->hp = 100;
        }

        /**
         * @return mixed
         */
        public function getName(){
            return $this->name;
        }

        public function getHp(){
            return $this->hp;
        }
        public function setHp($hp){
            if($this->hp + $hp > 100) $this->hp = 100;
            else $this->hp = $this->hp + $hp;
        }
        public function sayHi(){
            echo "Hello";
        }

    }
    $medKit = 50;
    $ivan = new Human("Ivan", "Ivanov", 45);
    $alex = new Human("Alex", "Ivanov", 39);
    echo $alex->getHp()."<br>"; // 100
    $alex->setHp(-30);
    echo $alex->getHp()."<br>"; // 70
    $alex->setHp($medKit);
    echo $alex->getHp()."<br>"; // 100