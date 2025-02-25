<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Http\Resources\LectureResource;

class LectureController extends Controller
{
    public function lectures()
    {
        try{
            $lecture = Lecture::all();
            if($lecture)
            {
                return $this->sendResponse(LectureResource::collection($lecture),'Lecture Found Successfully');
            }
            else{
                return $this->sendError('No Lecture Found');
            }    
        
    }catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}