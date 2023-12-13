<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\User;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(): view
    {
        return view('add-task');
    }

    
}
