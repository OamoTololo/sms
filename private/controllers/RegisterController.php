<?php

class RegisterController extends Controller
{
    public function index()
    {
        $this->view('auth/RegisterView', []);
    }
}