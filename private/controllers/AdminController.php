<?php

class AdminController Extends Controller
{
    public function index()
    {
        $this->view('adminView', []);
    }
}