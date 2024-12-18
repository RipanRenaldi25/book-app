<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function index(Request $req, Book $book) {
        $popularBooks = $book->bestRated()->take(4)->get();

        return view("books.index", ["popularBooks" => $popularBooks]);
    }

}
