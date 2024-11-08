<?php

class RegisterController extends Controller
{
    public function index()
    {
        $errors = [];
        if (count($_POST) > 0) {
            $user = new User;

            if ($user->validate($_POST)) {
                $this->redirect('auth/LoginView');
            } else {
                $errors = $user->errors;
            }
        }
        $this->view('auth/RegisterView', [
            'errors' => $errors
        ]);
    }
}