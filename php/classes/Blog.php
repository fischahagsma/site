<?php
    class Blog{
        static function getArticles(){
            $mysqli = new mysqli('localhost', 'root', '', 'blog0404');
            $result = $mysqli->query("SELECT * FROM `articles`");
            $articles = [];
            $i = 0;
            while ( ($row = $result->fetch_assoc()) != null ){
                $articles[$i]['title'] = $row['title'];
                $articles[$i]['article'] = $row['article'];
                $articles[$i]['author'] = $row['author'];
                $articles[$i]['id'] = $row['id'];
                $i++;
            }
            return json_encode($articles);
        }

        static function getArticleById($id){
            $mysqli = new mysqli('localhost', 'root', '', 'blog0404');
            $result = $mysqli->query("SELECT * FROM `articles` WHERE id = '$id'");
            $row = $result->fetch_assoc();
            return json_encode($row);
        }

        static function test(){
            return "ничего сложного";
        }
    }