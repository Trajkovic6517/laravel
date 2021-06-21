<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use App\Models\Ploca;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    public function all(){
        $kategorije=Kategorija::all();
        $ploce=Ploca::all();
        foreach ($kategorije as $kategorija) {
            $nazivi=[];
            foreach ($ploce as $ploca) {
                if ($ploca->kategorija_id == $kategorija->id){
                    $nazivi[count($nazivi)]=$ploca;
                }
            }
            $kategorija->ploce=$nazivi;
        }

        return view('pocetna', [
            'kategorije'=>$kategorije
        ]);

    }
    public function view($id){
        $kategorija= Kategorija::findOrFail($id);
        $ploce=Ploca::all();
        $nazivi=[];
        foreach ($ploce as $ploca) {
            if ($ploca->kategorija_id == $kategorija->id){
                $nazivi[count($nazivi)]=$ploca;
            }
        }
        $kategorija->ploce=$nazivi;
        return view('kategorije',['kategorija'=>$kategorija]);

    }
    public function getAll(){
        $kategorije=Kategorija::all();
        $ploce=Ploca::all();
        foreach ($kategorije as $kategorija) {
            $nazivi=[];
            foreach ($ploce as $ploca) {
                if ($ploca->kategorija_id == $kategorija->id){
                    $nazivi[count($nazivi)]=$ploca;
                }
            }
            $kategorija->ploce=$nazvii;
        }

        return response()->json($kategorije,200);
    }
    public function getById($id){
        $kategorija=Kategorija::find($id);
        $ploce=Ploca::all();
        if(is_null($kategorija)){
            return response()->json(["message"=>"Ne postoji kategorija"],404);
        }
        $nazivi=[];
        foreach ($ploce as $ploca) {
            if ($ploca->kategorija_id == $kategorija->id){
                $nazivi[count($nazivi)]=$ploca;
            }
        }
        $kategorija->ploce=$nazivi;
        return response()->json($kategorija,200);
    }
}
