<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrendingController extends Controller
{
    public function index()
    {
        $tempatTrending = DB::table('tempat_makan')
            ->leftJoin('komentar_rating', 'tempat_makan.id', '=', 'komentar_rating.id_tempat_makan')
            ->select('tempat_makan.*', DB::raw('GROUP_CONCAT(komentar_rating.komentar SEPARATOR "<br>") as komentar'), DB::raw('AVG(komentar_rating.rating) as average_rating'))
            ->where('tempat_makan.trending', 1)
            ->groupBy('tempat_makan.id')
            ->get();

        return view('trending', compact('tempatTrending'));
    }
}
