<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
     public function index(Request $request)
     {
         $series = Serie::query()->OrderBy('nome')->get();
         #dd($series);
         return view('series.index')->with('series', $series);
     }

     public function create()
     {
        return view('series.create');
     }

    public function store(Request $request)
    {
        Serie::create($request->all());

        //$nomeSerie = $request->nome;
        //$serie = new Serie();
        //$serie->nome = $nomeSerie;
        // $serie->save();
        return to_route('series.index');
     }
}

