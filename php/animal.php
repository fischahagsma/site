<?php
    class Animal{
        private $nickname;
        private $age;
        private $breed;
        /**
         * Animal constructor.
         * @param $nickname
         * @param $age
         * @param $breed
         */
        public function __construct($nickname, $age, $breed)
        {
            $this->nickname = $nickname;
            $this->age = $age;
            $this->breed = $breed;
        }

        /**
         * @return mixed
         */
        public function getNickname()
        {
            return $this->nickname;
        }

        /**
         * @return mixed
         */
        public function getAge()
        {
            return $this->age;
        }

        /**
         * @return mixed
         */
        public function getBreed()
        {
            return $this->breed;
        }
    }

    class Cat extends Animal{
        public function run(){
            echo $this->getNickname()." runing<br>";
        }
    }

    class Bird extends Animal{
        public function fly(){
            echo $this->getNickname()." flies<br>";
        }
    }
    class Horse extends Animal{
        public function run(){
            echo $this->getNickname()." runing<br>";
        }
    }
    class Pegasus extends Horse{
        public function fly(){
            echo $this->getNickname()." flies<br>";
        }
    }


    $barsik = new Cat("Barsik", 4, "Дворняга");
    $kesha = new Bird("Kesha", 6, "Волнистый");
    $barsik->run();
    $kesha->fly();