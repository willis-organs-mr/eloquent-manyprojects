<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
        {
            // Advantage of using an SQL View is it works just like a table so normal methods (e.g. paginate, order, etc) just work
            $projects = $request->user()->projects()->get();

            return view('user.projects.index', compact('projects'));
        }    
}
