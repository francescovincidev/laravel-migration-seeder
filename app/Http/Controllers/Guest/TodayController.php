<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class TodayController extends Controller
{
    public function index()
    {

        $title = 'Treni di oggi';
        $trains_today = Train::Where('data', '=',  Carbon::today()->toDateString())->get();
        return view('treni_oggi', compact('trains_today', 'title'));
    }
}
