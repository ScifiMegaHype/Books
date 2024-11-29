<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function create(){
        return view('books');
    }
    public function list_all_books(){
        return view('listbooks');
    }
    public function view_bok($id){
        return view('viewbook');
    }
    public function update_book($id){
        return view('updatebook');
    }
    public function delete_book($id){
        return view('deletebook');
    }
}


// Route::post('/books', 'BookController@create');
// Route::get('/books', 'BookController@list_all_books');
// Route::get('/books/{id}', 'BookController@view_book');
// Route::put('/books/{id}', 'BookController@update_book');
// Route::delete('/books/{id}', 'BookController@delete_book');