<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Hash;
class BookController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $data = Book::latest()->where('status', 0)->get();
        return view('books.index',compact('data'));
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        request()->validate([
            'image' => 'required',
            'name' => 'required',
            'author' => 'required',
            'language' => 'required',
            'file' => 'required',
        ]);
        $data = new Book();
        $data->name = $request->name;
        $data->author = $request->author;
        $data->language = $request->language;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "upload/books/images";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data->image = $store_path . '/' . $name;
        }
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $store_path = "upload/books";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data->link = $store_path . '/' . $name;
        }
        $data->save();
        return redirect()->back()->with('success', 'Book created successfully.');
    }

    public function edit($id){
        $data = Book::find($id);
        return view('books.edit',compact('data'));
    }

    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required',
            'author' => 'required',
            'language' => 'required',
        ]);
        $data = Book::find($id);
        $data->name = $request->name;
        $data->author = $request->author;
        $data->language = $request->language;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "upload/books/images";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data->image = $store_path . '/' . $name;
        }
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $store_path = "upload/books";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $image->getClientOriginalName());
            $image->move(public_path('/' . $store_path), $name);
            $data->link = $store_path . '/' . $name;
        }
        $data->save();
        return redirect()->back()->with('success', 'Book Updated successfully.');
    }

    public function destroy($id){
        $data = Book::find($id);
        $data->status = 1;
        $data->save();
        return redirect()->back()->with('success', 'Book Deleted successfully.');
    }
 
}
