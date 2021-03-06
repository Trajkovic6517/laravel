<?php

namespace App\Http\Controllers;

use App\Models\Ploca;
use Illuminate\Http\Request;

class KorpaController extends Controller
{
    public function view(Request $request){
        $stara=[];
        if($request->session()->has('korpa')) {
            $stara = $request->session()->get('korpa');
        }
        $korpa=array();
        foreach ($stara as $elements) {
            foreach ($elements as $element) {
                $korpa[$element->id]=$element;
            }
        }
        return view('korpa',['korpa'=>$korpa]);
    }
    public function add(Request $request){
        $ploca=Ploca::find($request->id);
        if($request->session()->has('korpa')){
            $stara=$request->session()->get('korpa');
            $korpa=array();
            $request->session()->forget('korpa');
            foreach ($stara as $elements) {
                foreach ($elements as $element) {
                    $korpa[$element->id]=$element;
                }
            }
            $korpa[$request->id]=$ploca;
            $request->session()->push('korpa',$korpa);
        }else{
            $korpa=array();
            $korpa[$request->id]=$ploca;
            $request->session()->push('korpa',$korpa);
        }
        return view('korpa',['korpa'=>$korpa]);


    }
}
