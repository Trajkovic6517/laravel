<?php

namespace App\Http\Controllers;

use App\Models\Ploca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlocaController extends Controller
{
    public function view($id){

        $pieces = explode("/", url()->current());
        $ploca= Ploca::findOrFail($pieces[count($pieces)-1]);
        return view('ploca',['ploca'=>$ploca]);

    }
    public function getAll(){

        return response()->json(Ploca::all(),200);
    }
    public function getById($id){
        $ploca=Ploca::find($id);
        if(is_null($ploca)){
            return response()->json(["message"=>"Nema date ploce"],404);
        }
        return response()->json($ploca,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'naziv'=>'required|min:2',
            'slika'=>'required|min:2',
            'opis'=>'required|min:2',
            'cena'=>'required',
            'kategorija_id'=>'required|min:2',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $ploca= Ploca::create($request->all());
        return response()->json($ploca, 201);
    }
    public function delete(Request $request, $id){
        $ploca=Ploca::find($id);

        if(is_null($ploca)){
            return response()->json(["message"=>"Ne postoji ploca"],404);
        }
        $telefon->delete();
        return response()->json(null,204);
    }
}
