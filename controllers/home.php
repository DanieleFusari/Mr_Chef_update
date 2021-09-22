<?php
$crud = new CRUD;
$auth = new Auth;
$DB = new DataBase;


$data = [

];

if ($_SERVER['QUERY_STRING'] === 'sent') {
    $data['message'] = true;
}

if ($crud->method === 'POST') {
    if (isset($crud->post['eventInfo'])) {
        $Date =  $crud->post['event_date'];
        $Name = $crud->post['name'];
        $Guest =  $crud->post['guests'];
        $Menu = $crud->post['menu'];
        $Phone =  $crud->post['phone'];
        $Email =  $crud->post['email'];
        $mailTo  = $_ENV['Email_address'];

        $header = "From: " . $Email;
        $subject = "Request information for the " .  $Date . " " . $Guest;

        $message =
               "Date: " . $Date . "</br>" .
               "Name: " . $Name . "</br>" .
               "Guests: " . $Guest . "</br>" .
               "Menu: " . $Menu . "</br>" .
               "Phone: " . $Phone . "</br>" .
               "Email: " . $Email . "</br>"
               ;

        mail($mailTo, $subject, $message, $header);
        $db = $DB->connectTo();
        $db->exec("INSERT INTO enquires VALUES(null, '$Date ', '$Phone', '$Menu', '$Email', '$Name', '$Guest', now())");
        try {
            $db->exec("INSERT INTO email VALUES('$Email')");
        } catch (\Exception $e) {
        }

        //
    } elseif (isset($crud->post['newsLetter'])) {
        $Email = $crud->post['email'];
        $db = $DB->connectTo();
        try {
            $db->exec("INSERT INTO email VALUES('$Email') ");
        } catch (\Exception $e) {
        }
    }
    header("Location: home?sent");
}

echo $twig->render('home.twig', $data);
