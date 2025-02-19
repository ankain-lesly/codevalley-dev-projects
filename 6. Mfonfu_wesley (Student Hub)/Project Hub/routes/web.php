<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/login", [UserController::class, "showLoginForm"])->name("login");
Route::post("/login", [UserController::class, "login"])->name("login");
Route::get("/register", [UserController::class, "showRegisterForm"])->name("register");
Route::post("/register", [UserController::class, "register"])->name("register");

Route::get("/", function() {
    return view("guest.index");
})->name("guest.home");

Route::get("/student", function() {
    return view("user.index");
})->name("home")->middleware("auth");

Route::post("logout", [UserController::class, "logout"])->name("logout");

Route::get("student/ca", [FileController::class, "showCa"])->name("user.ca");
Route::get("student/notes", [FileController::class, "showNotes"])->name("user.notes");
Route::get("student/revision", [FileController::class, "showRevision"])->name("user.revision");
Route::get("student/profile", [ProfileController::class, "viewProfile"])->name("user.profile");
Route::post("/student/profile", [ProfileController::class, "updateProfile"])->name("user.profile");

Route::get("student/results", function() {
    return view("user.results");
})->name("user.results")->middleware("auth");