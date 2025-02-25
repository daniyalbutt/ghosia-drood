<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use GuzzleHttp\Client;
class AyahController extends Controller
{
    // public function AyahDetails()
    // {
    //     try{
    //         $response = Http::get('https://api.alquran.cloud/v1/surah/114');
    //         $data = $response->json();
    //         $responseUrdu = Http::get('https://api.alquran.cloud/v1/surah/114/ur.jalandhry');
    //         $dataUrdu = $responseUrdu->json();
    //         $surahNumber = $data['data']['number'];
    //         $surahName = $data['data']['name'];
    //         $ayahs = $data['data']['ayahs'];
    //         $ayahsUrdu = $dataUrdu['data']['ayahs'];
    //         $dayOfYear = Carbon::now()->dayOfYear;
    //         $ayahIndex = $dayOfYear % count($ayahs);
    //         $ayahForTheDay = $ayahs[$ayahIndex];
    //         $ayahForTheDayUrdu = $ayahsUrdu[$ayahIndex];
    //         return $this->sendResponse(['Arabic' => $ayahForTheDay['text'],'Urdu' => $ayahForTheDayUrdu['text'],'verse no' => $ayahForTheDay['numberInSurah'],'number' => $surahNumber,'name' => $surahName],'Ayat Of the day');
    //     }  
    //     catch (\Exception $e) {
    //         return $this->sendError($e->getMessage());
    //     }
    // }
    public function AyahDetails()
    {
        try {
            $seed = Carbon::now()->format('Ymd');
            srand(hexdec($seed));

            $surahListResponse = Http::get('https://api.alquran.cloud/v1/surah');
            $surahList = $surahListResponse->json()['data'];
            $randomSurah = $surahList[rand(0, count($surahList) - 1)];
            $surahNumber = $randomSurah['number'];

            $ayahListResponse = Http::get("https://api.alquran.cloud/v1/surah/{$surahNumber}");
            $ayahList = $ayahListResponse->json()['data']['ayahs'];
            $ayahIndex = rand(0, count($ayahList) - 1);
            $ayahForTheDay = $ayahList[$ayahIndex];

            $ayahUrduResponse = Http::get("https://api.alquran.cloud/v1/surah/{$surahNumber}/ur.jalandhry");
            $ayahUrduList = $ayahUrduResponse->json()['data']['ayahs'];
            $ayahUrduForTheDay = $ayahUrduList[$ayahIndex];
            $ayahForTheDay['text'] = str_replace("\n", "", $ayahForTheDay['text']);

            return $this->sendResponse([
            'surah_number' => $surahNumber,
            'surah_name' => $randomSurah['name'],
            'ayah_number' => $ayahForTheDay['numberInSurah'],
            'arabic' => $ayahForTheDay['text'],
            'urdu' => $ayahUrduForTheDay['text']
            ], 'Verse of the Day!');
        } 
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    public function HadithDetails()
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://www.hadithapi.com/public/api/hadiths?apiKey=$2y$10$hnO6O7Pd3h8UieOW2StbiEUd5rtaNUfo7Al3ntfPZHrN2pMVcG');
            $data = json_decode($response->getBody()->getContents(), true);
            $hadiths = $data['hadiths']['data'];
            
            $today = Carbon::now()->dayOfYear;
            $index = $today % count($hadiths);
            $dailyHadith = $hadiths[$index];
            $result = [
            'hadithUrdu' => $dailyHadith['hadithUrdu'],
            'hadithArabic' => $dailyHadith['hadithArabic'],
            'bookName' => $dailyHadith['book']['bookName'],
            'Hadith No' => $dailyHadith['hadithNumber']
            ];

            return $this->sendResponse($result, 'Hadith Of the Day');
        } 
        catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}
