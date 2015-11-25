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
            $andreism = Andreism::where('approved', 1)->find($id);
        }else {
            $andreism = Andreism::where('approved', 1)->orderBy(DB::raw('RAND()'))->first();
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
            $andreism = Andreism::where('approved', 1)->find($id);
        }else {
            $andreism = Andreism::where('approved', 1)->orderBy(DB::raw('RAND()'))->first();
        }

        if(!$andreism) abort(404);

        return response()->json($andreism);

    }

    public function indexJson()
    {
        $andreism = Andreism::where('approved', 1)->paginate(10);
        return response()->json($andreism);
    }

    public function store(){
        $data = $this->request->all();
        if(empty($data['story'])) return response()->json(["error" => "No data sent"], 400);
        $andreism = New Andreism();
        if(trim($data['name'])) $andreism->name = $data['name'];
        $andreism->story = $data['story'];
        $andreism->save();
        return response()->json($andreism, 201);

    }
}