<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendEmail;
use App\Jobs\SendEmailJob;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('send-email', function()
{
    $data['email'] = 'wjlrcsmkbbc@gmail.com';

    dispatch(new SendEmailJob($data));

    return 'success';
});
