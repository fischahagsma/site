<?php
    $cars = ["bmw", "audi", "kia"];
    $user = ["Ivan", "Ivanov", "ivan@mail.ru", 1];
    $user = [
        'name'=>"Ivan",
        'lastname'=>"Ivanov",
        'email'=>"ivan@mail.ru",
        'id'=>1
    ];
    /*for($i=0; $i<count($cars); $i++){
        echo $cars[$i]."<br>";
    }*/
    /*foreach ($cars as $car){
        echo $car."<br>";
    }*/
    /*$nums = [4,3,4,4,5,5,4,5,4,3];
    $sum = 0;
    foreach ($nums as $num){
        $sum = $sum + $num;
    }
    echo $sum/count($nums);*/
    // Задача, найти максимальный нечетный элемент массива
    $nums = [450,452,34,123,546];
    $max = -INF;
    for($i = 0; $i<count($nums); $i++){
        if($max < $nums[$i] and $nums[$i]%2 != 0){
            $max = $nums[$i];
        }
    }
    echo $max;