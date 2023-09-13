<?php


use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Api\ProjectController as ApiProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/ProjectController', function () {
//     $projects = Project::all();
//     return response()->json($projects);
// });
Route::get('/projects', [ApiProjectController::class, 'index']);
Route::get('/projects/{project}', [ApiProjectController::class, 'show']);
Route::post('/contact-message', [ContactController::class, 'message']);
