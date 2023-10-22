<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class PortfolioController extends Controller
{
    public function home() {
        return view('home');
    }

    public function experience() {
        return view('experience');
    }

    public function projects() {
        $data = File::json(storage_path('data/projects.json'));
        return view('projects', compact('data'));
    }

    public function project(string $id = '') {
        $projects = File::json(storage_path('data/projects.json'));

        foreach ($projects as $project) {
            if ($project['id'] == $id) {
               return view('project', compact('project'));
            }
        }
        abort(404);
    }
}
