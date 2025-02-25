<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function books(Request $request)
    {
        try{
            $book = Book::all();
            if($book)
            {
                return $this->sendResponse(BookResource::collection($book),'Books Fetched Successfully');
            }
            else{
                return $this->sendError('No Book Found');
            }    
        
    }catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}
