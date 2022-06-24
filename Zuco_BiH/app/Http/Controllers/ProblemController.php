<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function create($id){
        $temp = $id;
        $kategorije = Category::all();
        $pod_kategorije = Sub_category::all();
        $data = [
            'kategorija' => $kategorije,
            'pod_kategorije' => $pod_kategorije,
            'temp' => $temp
        ];
        return view('problems.create',$data);
    }
}
