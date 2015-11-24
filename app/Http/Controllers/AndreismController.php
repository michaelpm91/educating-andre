<?php

namespace App\Http\Controllers;

use App\Andreism;
use DB;

use Illuminate\Http\Request;

class AndreismController extends Controller
{

    protected $request;
    public function __construct(Request $request){
        $this->request = $request;
    }

    public function show($id = null)
    {
        if($id) {
            $andreism = Andreism::find($id);
        }else {
            $andreism = Andreism::orderBy(DB::raw('RAND()'))->first();
        }

        if(!$andreism) abort(404);

        return view('show', [
            'story' => $andreism->story,
            'id' => $andreism->id,
            'author' => $andreism->name
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

    public function store(){

        return response()->json("created", 201);

    }
}