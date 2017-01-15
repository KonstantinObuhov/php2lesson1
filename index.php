<?php

require __DIR__ . '/autoload.php';

/*При вызове метода незнакомого класса запускается функция __autoload
из файла autoload.php и делает require нужного нам класса
*/
//$data = \App\Models\Author::findAll();
//$data = \App\Models\Article::findAll();
//$data = new \App\Models\Article;
//$data = new \App\Models\Author;

$data = \App\Models\Article::findById(1);
var_dump($data);

//$data = \App\Models\Author::getLatest();
//var_dump($data);