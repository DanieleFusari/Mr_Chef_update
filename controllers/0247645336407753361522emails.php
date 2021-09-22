<?php
$auth = new Auth;
$crud = new CRUD;
$DB = new DataBase;

$auth->ipcheck();
$auth->lockPage();


if (isset($crud->get['limit'])) {
    $limit = (int)$crud->get['limit'];
    $data['limit'] = $limit;
} else {
    $limit = 10;
    $data['limit'] = $limit;
}

$db = $DB->connectTo();

$messages = $db->query("SELECT * FROM messages ORDER BY reg_date DESC LIMIT $limit");
$messages = $messages->fetchAll(PDO::FETCH_ASSOC);
$data['messages'] = $messages;

$enquires = $db->query("SELECT * FROM enquires ORDER BY reg_date DESC LIMIT $limit");
$enquires = $enquires->fetchAll(PDO::FETCH_ASSOC);
$data['enquires'] = $enquires;

echo $twig->render('messages.twig', $data);
