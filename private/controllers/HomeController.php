<?php
/*
 * This file is part of the Student Management System Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) NtwanaSosha
 */
class HomeController extends Controller
{
    public function index()
    {
        $user = $this->loadModel('User');

        $data = $user->findAll();
        //$data = $user->where('name', 'Oamogetswe');
        $this->view('HomeView', ['rows' => $data]);
    }
}