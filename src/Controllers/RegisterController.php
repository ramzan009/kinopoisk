<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

class RegisterController extends Controller
{
    public function index(): void
    {
        $this->view('register');
    }

    public function register(): void
    {
        $validation = $this->request()->validate([
            'email' => [
                'required',
                'min:3',
            ],
            'password' => [
                'required',
                'min:8',
            ],
        ]);
        if (!$validation) {
            foreach ($this->request()->error() as $field => $error) {
                $this->session()->set($field, $error);
            }

            $this->redirect('/register');
        }

        $userId = $this->db()->insert('users', [
            'email' => $this->request()->input('email'),
            'password' => password_hash($this->request()->input('password'), PASSWORD_DEFAULT),
        ]);
       dd('User created with id ' . $userId);
    }
}