<?php
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::post('/members', [MemberController::class, 'store']);
