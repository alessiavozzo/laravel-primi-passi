<?php

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

Route::get('/', function () {

    $data = [
        "message" => "Hello world",
        "anotherMessage" => "Hello hello"
    ];
    return view('home', $data);
})->name("home");

Route::get('/about', function () {

    $data = [
        "aboutMessage" => "About",
        "aboutParagraph" => "aboutaboutaboutabout"
    ];
    return view('about', $data);
})->name("about");

Route::get('/contacts', function () {

    $data = [
        "contactsMessage" => "contacts",
        "contactsParagraph" => "contactscontactscontactscontacts"
    ];
    return view('contacts', $data);
})->name("contacts");
