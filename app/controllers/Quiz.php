<?php

class Quiz extends Controller {
    public function index()
    {
        $data['title'] = 'Quiz';
        $this->view('quiz/index');
    }
}