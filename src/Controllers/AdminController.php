<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Kernel\View\View;

class AdminController extends Controller
{
    public function index(): void
    {
        $this->view('admin/index');
    }
}