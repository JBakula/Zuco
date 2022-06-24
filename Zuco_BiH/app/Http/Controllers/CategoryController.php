<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Report_type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        /*$kategorije = Category::all();
        dd($kategorije);*/
        $kategorije = Category::all();
        $tipovi_prijave = Report_type::all();
        $data = [
            'kategorija' => $kategorije,
            'tip_prijave' => $tipovi_prijave
        ];
        return view('index',$data);
    }

    public function create(Request $request){
        $userInput = $request->validate([
            'category_name' => 'reqiured|string|max:150'
        ]);

        
        //Category::create($userInput);
        dd($userInput);
    }

}
