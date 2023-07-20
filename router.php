<?php
    $path = $_SERVER['REQUEST_URI'];
    $pathArr = explode("/", $path);
    require_once('php/classes/Blog.php');
    if($path == "/login"){
        $content = file_get_contents('views/login.html');
    }else if($path == "/reg"){
        $content =  file_get_contents('views/reg.html');
    }else if($path == "/addArticle"){
        $content =  file_get_contents('views/addArticle.html');
    }else if($path == "/blog"){
        $content = file_get_contents('views/blog.html');
    }else if($path == "/getArticles"){
        exit(Blog::getArticles());
    }else if($path == "/test"){
        exit(Blog::test());
    }else if($pathArr[1] == "article"){
        $content = file_get_contents('views/article.html');
    }else if($pathArr[1] == "getArticle"){
        $id = $pathArr[2];
        exit(Blog::getArticleById($id));
    }
    else{
        $content = "Такой не сущетсвует, ошибка 404";
    }

    require_once('template.php');