<?php

class Logout extends Controller {
    public function index()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        session_destroy();

        header("Location: " .BASEURL. "/login");
        exit;
    }
}