<?php

class RegisterController extends Controller
{
    public function index()
    {
        $errors = [];
        if (count($_POST) > 0) {
            $user = new User;

            if ($user->validate($_POST)) {
                $data['name'] = $_POST['name'];
                $data['surname'] = $_POST['surname'];
                $data['username'] = $_POST['username'];
                $data['date'] = date('Y-m-d H:i:s');
                $data['url_address'] = $_POST['url_address'];
                $data['email'] = $_POST['email'];
                $data['gender'] = $_POST['gender'];
                $data['role'] = $_POST['role'];
                $data['school_id'] = $_POST['school_id'];
                $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $data['retyped_password'] = $_POST['retyped_password'];

                $user->insert($data);
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