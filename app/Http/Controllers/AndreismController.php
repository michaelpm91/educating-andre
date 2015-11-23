<?php

namespace App\Http\Controllers;

use App\Andreism;
use DB;

class AndreismController extends Controller
{

    public function index()
    {
        return view('index', ['andreism' => Andreism::orderBy(DB::raw('RAND()'))->get()]);
    }
    public function indexJson()
    {
        dd('lolz Json');
    }
    public function show($id)
    {
        dd('lolz show', $id);
    }
    public function showJson($id)
    {
        dd('lolz show Json', $id);

    }
}