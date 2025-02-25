<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Durood;
use App\Http\Resources\DuroodResource;
use Auth;

class DuroodController extends Controller
{
    public function addDurood(Request $request)
    {
        try{
            $request->validate([
                'durood => required|integer'
            ]);
            $data = Durood::create([
                'durood' => $request->durood,
                'quran_majeed_part' => $request->quran_majeed_part,
                'user_id' => Auth::user()->id
            ]);
            return $this->sendResponse($data,'Durood Added Successfully');
        }
        catch (ValidationException $e) {
            return $this->sendError('Validation Error',  $e->errors());
        }
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    
    public function totalDurood()
    {
        try{
         $totalDurood = Durood::sum('durood');
         return $this->sendResponse(['totalDurood' => $totalDurood ], 'Total Durood Fetched Successfully');
        }
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    
    public function myDurood(Request $request)
    {
        try{
            $request->validate([
                'user_id => required|integer', 
            ]);
            $duroodCount = Durood::where('user_id',Auth::user()->id)->sum('durood');
            $quranpartCount = Durood::where('user_id',Auth::user()->id)->sum('quran_majeed_part');
            if($duroodCount)
            {
                return $this->sendResponse(['totalDuroodSharif' => $duroodCount, 'totalPartsOfQuranMajeed' => $quranpartCount ], 'Total Submitted');    
            }
            else{
                return $this->sendError('User did Not Submit Durood');
            }
            
        }
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
        
    }
    
    public function duroodHistory()
    {
        try{
            $duroodHistory = Durood::where('user_id',Auth::user()->id)->get();
            if($duroodHistory)
            {
                return $this->sendResponse($duroodHistory,'User Durood Histroy updated successfully');    
            }
            else
            {
                return $this->sendError('User Does not have History');
            }
        }
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
    
    
}
