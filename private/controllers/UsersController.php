<?php

class UsersController extends Controller
{
    public function index()
    {
        try {
            if (!Auth::loggedIn()) {
                $this->redirect('/LoginController');
            }
            $user = new User;
            $data = $user->findAll();

            $this->view('UsersView', ['rows' => $data]);
        } catch (Exception $e) {
            $this->view('UsersView', ['error' => $e->getMessage()]);
        }
    }
}