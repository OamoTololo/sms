<?php

class LecturerController extends Controller
{
    public function index()
    {
        $this->view('LecturerView', []);
    }
}