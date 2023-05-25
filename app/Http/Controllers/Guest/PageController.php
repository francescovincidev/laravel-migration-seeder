<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::All();
        $trains_today = Train::Where('data', '=',  Carbon::today()->toDateString())->get();
        return view('home', compact('trains', 'trains_today'));
    }
}
