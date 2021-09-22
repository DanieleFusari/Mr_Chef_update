<?php
$crud = new CRUD;
$auth = new Auth;

$auth->ipcheck();

if ($crud->method === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $auth->login($post['userName'], $post['password']);
    header('Location: /0247645336407753361522emails');
} elseif ($crud->method === 'GET') {
    if ($auth->loggedIn) {
        if ($crud->get['logout']) {
            setcookie("auth", "", time() - 3600);
        }
        header('Location: /0247645336407753361522emails');
    } else {
        echo $twig->render('login.twig', []);
    }
}
