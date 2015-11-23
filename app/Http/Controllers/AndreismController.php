<?php

namespace App\Http\Controllers;


class AndreismController extends Controller
{

    public function index()
    {
        dd('lolz');
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