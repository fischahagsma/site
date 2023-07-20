<?php
    class Person{
        private $name;
        private $lastname;
        private $age;
        private $mother;
        private $father;
        public function __construct($name, $lastname, $age, $mother, $father){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->mother = $mother;
            $this->father = $father;
        }
        public function getName(){return $this->name;}
        public function getLastname(){return $this->lastname;}
        public function getAge(){return $this->age;}
        public function getMother(){return $this->mother;}
        public function getFather(){return $this->father;}
        public function getInfo(){
            $result = "Имя: ".$this->name."<br>Фамилия: ".$this->lastname."<br>Возраст: ".$this->age;
            if($this->mother != null){
                $result .= "<br>Имя мамы: ".$this->getMother()->name;
                if ($this->mother->mother != null){
                    $result .= "<br>Имя бабушки по маминой линии: ".$this->mother->mother->name;
                }
                if($this->mother->father != null) {
                    $result .= "<br>Имя дедушки по маминой линии: ".$this->mother->father->name;
                }
            }
            if($this->father != null){
                $result .= "<br>Имя папы: ".$this->father->name;
                if ($this->father->mother != null){
                    $result .= "<br>Имя бабушки по папиной линии: ".$this->father->mother->name;
                }
                if($this->father->father != null) {
                    $result .= "<br>Имя дедушки по папиной линии: ".$this->father->father->name;
                }
            }

            echo $result;
        }
    }
    $person7 = new Person('Boris', "ivanov", 78, null, null);
    $person6 = new Person("Jula", "Ivanova", 76, null, null);
    $person5 = new Person("Oleg", "Petrov", 69, null, null);
    $person4 = new Person("Elena", "Petrova", 70, null, null);
    $person3 = new Person("Igor", "Ivanov", 34, $person6, $person7);
    $person2 = new Person("Olga","Ivanova", 30, $person4, $person5);
    $person1 = new Person("Ivan", "Ivanov", 6, $person2, $person3);
    $person1->getInfo();