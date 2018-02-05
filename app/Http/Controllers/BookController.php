<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->get();
        $categories = BookCategory::all();
        return view('admin.books.create', compact('books','categories'));
    }

    public function getBooks()
    {
        /*$books = Book::orderBy('created_at', 'desc')->get();
        return $books;
        return view('admin.books.create', compact('books'));*/
     }

    public function bookCategory()
    {
        $bc = BookCategory::all();
        return response()->json([
            'bookCategory' => $bc
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'description' => 'required|max:150',
        ]);

        If($request->hasFile('pdf')){
            $file = $request->file('pdf');
            $filename = time() . $file->getClientOriginalName();
            $path = $request->file('pdf')->storeAs('pdfs', $filename);
            $book = new Book;
            $category = BookCategory::find($request->category);

            $book->title = $request->title;
            $book->description = $request->description;
            $book->pdf = $path;
            $book->user()->associate(Auth::user());
            $book->bookCategory()->associate($category);
            $book->save();
            Session::flash('message', 'PDF Successfully saved');
            return back();
        }


    }

        public function destroy($id)
        {
            $book = Book::find($id);
            Storage::delete($book->pdf);
            Book::destroy($id);
            Session::flash('message', 'PDF Successfully deleted');
            return back();
        }
}
