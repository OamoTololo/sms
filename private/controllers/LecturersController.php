<?php

class LecturersController extends Controller
{
    public function index()
    {
        $this->view('LecturerView', []);
    }
}