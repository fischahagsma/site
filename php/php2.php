<?php

    // Реализовать функцию, которая принимает на вход число, которое является сдачей
    // и выдать сдачу, номиналом 1, 2, 5, 10
    // Пример: Мы даём на вход 32 = 10 10 10 2
    // Пример: 27 = 10 10 5 2

    /*function getChange($num){
        if($num >= 10){
            echo "10 ";
            getChange($num-10);
        }else if($num >= 5){
            echo "5 ";
            getChange($num-5);
        }else if($num >= 2){
            echo "2 ";
            getChange($num-2);
        }else if($num >= 1){
            echo "1 ";
            getChange($num-1);
        }
    }

    getChange(68);*/

    function f($n){
        if($n>2){
            return f($n-1)+g($n-2);
        }else{
            return $n;
        }
    }

    function g($n){
        if($n>2){
            return g($n-1)+f($n-2);
        }else{
            return 1;
        }
    }
    echo f(9);

    // f(9) = f($n-1)+g($n-2) = 28 + 17 = 45
    // f(8) = f($n-1)+g($n-2) = 17 + 11 = 28
    // f(7) = f($n-1)+g($n-2) = 10 + 7 = 17
    // f(6) = f($n-1)+g($n-2) = 6 + 4 = 10
    // f(5) = f($n-1)+g($n-2) = 4 + 2 = 6
    // f(4) = f($n-1)+g($n-2) = 3 + 1 = 4
    // f(3) = f($n-1)+g($n-2) = 2 + 1 = 3
    // f(2) = 2
    // g(1) = 1
    // g(2) = 1
    // g(3) = g($n-1)+f($n-2) = 1 + 1 = 2
    // g(4) = g($n-1)+f($n-2) = 2 + 2 = 4
    // g(5) = g($n-1)+f($n-2) = 4 + 3 = 7
    // g(6) = g($n-1)+f($n-2) = 7 + 4 = 11
    // g(7) = g($n-1)+f($n-2) = 11 + 6 = 17