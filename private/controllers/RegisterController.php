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
                $data['email'] = $_POST['email'];
                $data['gender'] = $_POST['gender'];
                $data['role'] = $_POST['role'];

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