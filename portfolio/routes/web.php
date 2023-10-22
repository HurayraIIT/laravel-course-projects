<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 *  The List Of Routes
 *  /
 *  /about
 *  /contact
 *  /projects
 *  /projects/1
 *  /projects/2
 *  /projects/3
 */

Route::get('/', [PortfolioController::class, 'home'])->name('home');

Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');

Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

Route::get('/projects/{id}', [PortfolioController::class, 'project'])->name('project');
