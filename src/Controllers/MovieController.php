<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;
use App\Services\CategoryService;

class MovieController extends Controller
{
    public function create(): void
    {
        $categories = new CategoryService($this->db());

        $this->view('admin/movies/add', ['categories' => $categories->all()]);
    }
}