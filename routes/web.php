<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/books', 'BookController@create');
Route::get('/books', 'BookController@list_all_books');
Route::get('/books/{id}', 'BookController@view_book');
Route::put('/books/{id}', 'BookController@update_book');
Route::delete('/books/{id}', 'BookController@delete_book');

// Define basic routes in routes/api.php to handle CRUD operations:
// POST /api/books to create a new book.
// GET /api/books to list all books.
// GET /api/books/{id} to view a single book by its ID.
// PUT /api/books/{id} to update a book.
// DELETE /api/books/{id} to delete a book.