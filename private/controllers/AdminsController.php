<?php

class AdminsController Extends Controller
{
    public function index()
    {
        $this->view('adminView', []);
    }
}