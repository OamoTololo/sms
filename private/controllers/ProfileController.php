<?php
/*
 * This file is part of the Student Management System Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) NtwanaSosha
 */
class ProfileController extends Controller
{
    public function index($id = null)
    {
        $this->view('ProfileView');
    }
}