<?php
$crud = new CRUD;
$DB = new DataBase;

$data = [];

if ($_SERVER['QUERY_STRING'] === 'sent') {
    $data['message'] = true;
}

if ($crud->method === 'POST' && isset($crud->post['contactMessage'])) {
    $Name = $crud->post['name'];
    $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $Phone = $crud->post['phone'];
    $Message = $crud->post['message'];
    $mailTo = $_ENV['Email_address'];

    $header = "From: " . $Email;
    $subject = "Message from " . $Name;

    $message =
           "Name: "  . $Name . "</br>" .
           "Email: " . $Email . "</br>" .
           "Phone: " . $Phone . "</br>" .
           "Message: " . $Message . "</br>" ;

    mail($mailTo, $subject, $message, $header);
    $db = $DB->connectTo();
    $db->exec("INSERT INTO messages VALUES(null, '$Name', '$Email', '$Phone', '$Message', now())");
    try {
        $db->exec("INSERT INTO email VALUES('$Email')");
    } catch (\Exception $e) {
    }
    header("Location: contact?sent");
}

echo $twig->render('contact.twig', $data);
