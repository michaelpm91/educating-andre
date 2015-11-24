<?php

namespace App\Http\Controllers;

use App\Andreism;
use DB;

class AndreismController extends Controller
{

    public function show($id = null)
    {
        if($id) {
            $andreism = Andreism::find($id);
        }else {
            $andreism = Andreism::orderBy(DB::raw('RAND()'))->first();
        }

        if(!$andreism) abort(404);

        return view('show', [
            'story' => $andreism->story
        ]);
    }
    public function showJson($id = null)
    {
        if($id) {
            $andreism = Andreism::find($id);
        }else {
            $andreism = Andreism::orderBy(DB::raw('RAND()'))->first();
        }

        if(!$andreism) abort(404);

        return response()->json($andreism);

    }
}