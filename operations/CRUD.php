<?php


class CRUD
{
    public array $get;
    public array $post;
    public string $method;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($post) {
            $this->post = $post;
        } else {
            $this->post =  [];
        }
        $get = $_SERVER['QUERY_STRING'];
        if ($get) {
            $queries = [];
            parse_str($get, $queries);
            $this->get =  $queries;
        } else {
            $this->get =  [];
        }
    }

    public function setMessage($cookie_value, $time, $name = 'message')
    {
        setcookie($name, $cookie_value, time() + $time, "/");
    }

    public function getMessage($name = 'message')
    {
        if (isset($_COOKIE[$name])) {
            return   $_COOKIE[$name];
        } else {
            return '';
        }
    }

    public function delcookie($name = 'message')
    {
        setcookie($name, "", time() - 3600);
    }
}
