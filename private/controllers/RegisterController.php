<?php

class RegisterController extends Controller
{
    public function index()
    {
        $errors = [];
        if (count($_POST) > 0) {
            $user = new User;

            if ($user->validate($_POST)) {
                $_POST['date'] = date('Y-m-d H:i:s');

                $user->insert($_POST);
                $this->redirect('/LoginController');
            } else {
                $errors = $user->errors;
            }
        }
        $this->view('auth/RegisterView', [
            'errors' => $errors
        ]);
    }
}