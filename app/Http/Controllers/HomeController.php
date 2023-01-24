<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function pesan()
    {
        return view('pesan');
    }

    public function harga()
    {
        return view('harga');
    }

    public function kumpe()
    {
        return view('kumpe');
    }


    public function maskem()
    {
        return view('maskem');
    }

    public function bukit()
    {
        return view('bukit');
    }
    public function chart()
    {
        $wisata = Pesan::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("day_name"))
            ->pluck('count', 'day_name');

        $labels = $wisata->keys();
        $data = $wisata->values();
        return view('chart', compact('labels', 'data'));
    }
}
