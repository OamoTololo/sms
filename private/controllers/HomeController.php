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
        //$user = new User;
        try {
            $user = new User;

            $data = $user->findAll();

            $this->view('HomeView', ['rows' => $data]);
        } catch (Exception $e) {
            $this->view('HomeView', ['error' => $e->getMessage()]);
        }
    }
}