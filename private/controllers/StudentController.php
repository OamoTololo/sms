<?php
/*
 * This file is part of the Student Management System Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) NtwanaSosha
 */
class StudentController extends Controller
{
    public function index($id = null)
    {
        echo "This is a Student Controller " . $id;
    }
}