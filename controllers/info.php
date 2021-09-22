<?php
// $crud = new CRUD;

$info = ['tc', 'aboutus'];

if (!in_array($_SERVER['QUERY_STRING'], $info)) {
    header('Location: /');
    exit;
}

$data = [
'page' => $_SERVER['QUERY_STRING']
];

echo $twig->render('info.twig', $data);
