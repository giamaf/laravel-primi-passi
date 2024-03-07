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
//! Creo delle variabili da inserire nell'array associativo

Route::get('/home', function () {
    $label_home = 'Home';
    $scopri = 'Scopri di più';
    $contatti = 'Contatti';
    $about = 'About Us';

    $home_links = [ 
                    'scopri' => $scopri, 
                    'contatti' => $contatti, 
                    'about' => $about
                 ];

    //! Creo l'array nel quale inserisco le variabili da mandare giù
    $data = [
                'label_home' => $label_home,
                'links' => $home_links,
    ];

    //* La funzione accetta come primo parametro la stringa senza .blade.php e come secondo parametro i dati da mandare giù (ARRAY ASSOCIATIVO)
    //! Inserisco nella funzione view l'array associativo creato in precedenza
    return view('home', $data);
})->name('home');

Route::get('/home/scopri', function () {

    $label_home = 'Home';
    $scopri = 'Scopri di più';

    $data = [
        'home' => $label_home,
        'scopri' => $scopri,
    ];
    return view('scopri', $data);
})->name('scopri');

Route::get('/home/contatti', function () {

    $label_home = 'Home';
    $contatti = 'Contatti';

    $data = [
        'home' => $label_home,
        'contatti' => $contatti,
    ];
    return view('contatti', $data);
})->name('contatti');

Route::get('/home/about', function () {

    $label_home = 'Home';
    $about = 'About Us';

    $data = [
        'home' => $label_home,
        'about' => $about
    ];
    return view('about', $data);
})->name('about');