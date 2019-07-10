<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Genre;
use App\Mail\BookReserved;
use App\Mail\CommentReceived;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $author = $request->input('author') ?? null;
        $name = $request->input('name') ?? null;
        $year = $request->input('year') ?? null;
        $genre = $request->input('genre') ?? null;

        $genres = Genre::with('children')->where('parent_id', null)->get();
        $authorsData = Author::all();
        $authors = [];
        foreach ($authorsData as $authorItem) {
            $authors[$authorItem->id] = $authorItem->fullName();
        }

        $books = Book::where('id', '>', 0);


        if ($name) {
            $books = $books->where('name', 'like', '%' . $name . '%');
        }

        if ($year) {
            $books = $books->where('year', $year);
        }

        if ($author) {
            $books = $books->where('author_id', $author);
        }

        if ($genre) {
            $books = $books->where('genre_id', $genre);
        }

        $books = $books->paginate(9);

        return view('books', compact('genres', 'books', 'authors'));
    }

    public function show($id)
    {
        $book = Book::find($id);

        return view('book', compact('book'));
    }

    public function bookings()
    {

        return view('bookings');
    }

    public function booking($id)
    {
        $book = Book::find($id);

        return view('bookings', compact('book'));
    }

    public function reserveBook(Request $request) {
        $data = $request->except(['_token']);

        $book = Book::find($data['book_id']);

        Reservation::create($data);

        Mail::to(['address' => $data['email']])->send(new BookReserved($data, $book));

        Session::flash('message', 'Ваша заяквка принята');

        return redirect()->route('front.booking', ['id' => $book->id]);
    }
}
