<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\Validator\Validator;
use App\Kernel\View\View;

class MovieController extends Controller
{
    public function index(): void
    {
        $this->view('movie');
    }

    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store(): void
    {
        $validation = $this->request()->validate([
            'name' => [
                'required',
                'min:3',
                'max:100',
            ],
        ]);

        if (!$validation) {
            foreach ($this->request()->error() as $field => $error) {
                $this->session()->set($field, $error);
            }

            $this->redirect('admin/movies/add');
        }

        $id = $this->db()->insert('movies', [
            'name' => $this->request()->input('name'),
        ]);

        dd('saS' . $id);
    }
}