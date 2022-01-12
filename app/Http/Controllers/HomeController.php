<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use App\Models\Statue;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
        $paintingCount = Painting::count();
        $statueCount = Statue::count();
        $statuePrice = Statue::sum('price');

        return view('stats', [
            'paintingCount' => $paintingCount,
            'statueCount' => $statueCount,
            'statuePrice' => $statuePrice,
        ]);
    }
}
