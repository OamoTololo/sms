<?php

class LoginController extends Controller
{
    public function index()
    {
        $errors = [];

        if (count($_POST) > 0) {
            $user = new User;

            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];
                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $this->redirect('/HomeController');
                }
            }
            $errors['email'] = "Wrong email or password";
        }

        $this->view('auth/LoginView', [
            'errors' => $errors
        ]);
    }
}