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
        $db = new SmsDB;

        $data = $db->query("SELECT * FROM USERS");
        $this->view('HomeView', ['rows' => $data]);
    }
}