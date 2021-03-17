<?php

use App\Http\Controllers\API\MemberController;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function(){
    $routes = Route::getRoutes()->getRoutes();
    $arrRoutes = [];

    // Walking through all routes, but only for the API
    foreach ($routes as $route) {
        if(strpos($route->uri(), 'api') !== false) {
            // Check if the route exists
            if(!isset($arrRoutes['/' . $route->uri()])) {
                $arrRoutes['/' . $route->uri()] = [];
            }

            // Adding the method for the given route
            foreach($route->methods() as $method) {
                $arrRoutes['/' . $route->uri()][] = $method;
            }
        }
    }

    return new JsonResponse($arrRoutes);
});

// Resources
Route::apiResource('members', MemberController::class);
