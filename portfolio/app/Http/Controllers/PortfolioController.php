<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home(Request $request) {
        return view('home');
    }

    public function about(Request $request) {
        return view('about');
    }

    public function contact(Request $request) {
        return view('contact');
    }

    public function projects(Request $request, ?string $id = '') {
        return view('projects', ['id' => $id]);
    }
}
