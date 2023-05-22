<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

// Question 1
Route::post('/userinfo',[AssignmentController::class,'UserInfo']);


Route::post('/useragent',[AssignmentController::class,'UserAgent']);

Route::get('/query',[AssignmentController::class,'ApiEndpoint']);


Route::get('/jsonresponse',[AssignmentController::class,'JsonResponse']);


Route::post('/upload',[AssignmentController::class,'FileUploads']);


Route::post('/setcookie',[AssignmentController::class,'SetCookie']);


Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Email must not be empty!";
    }
});
// Assignment complete(module-14)
