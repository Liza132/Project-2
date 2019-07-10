<?php

namespace App\Http\Controllers;

use App\Book;
use App\Mail\CommentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function index()
    {
        $books = Book::latest()->limit(3)->get();

        return view('index', compact('books'));
    }

    public function about()
    {

        return view('about');
    }

    public function contacts()
    {

        return view('contacts');
    }

    public function events()
    {

        return view('events');
    }

    public function sendMessage(Request $request) {
        $message = $request->except(['_token']);

        Mail::to(['address' => 'admin@library.com'])->send(new CommentReceived($message));

        Session::flash('message', 'Ваша заявка принята');

        return redirect()->route('front.contacts');
    }
}
