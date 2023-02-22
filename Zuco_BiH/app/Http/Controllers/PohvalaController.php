<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Problem;
use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Http\Request;

class PohvalaController extends Controller
{
    //
    public function index(){
        $pohvale = Problem::where('report_type_id',2)->get();
        $gradovi = City::all();
        $data = [
            'pohvale' => $pohvale,
            'gradovi'=>$gradovi
            
        ];
        return view('pohvale.index',$data);
    }
    public function edit($id){
        $pohvala = Problem::find($id);
        $gradovi = City::all();
        $kategorije = Category::all();
        $podkategorije = Sub_category::all();
        $data = [
            'pohvala'=>$pohvala,
            'gradovi'=>$gradovi,
            'kategorije' => $kategorije,
            'podkategorije'=>$podkategorije
        ];
        return view('pohvale.edit',$data);
    }
    public function update(Request $request,$id){
        $userInput = $request->validate([
            'description' => 'required',
            'street' => 'string',
            'city_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'report_type_id' => 'required'
        ]);
        $pohvala = Problem::find($id);
        $pohvala->description = $userInput['description'];
        $pohvala->street = $userInput['street'];
        $pohvala->city_id = $userInput['city_id'];
        $pohvala->category_id = $userInput['category_id'];
        $pohvala->sub_category_id = $userInput['sub_category_id'];
        $pohvala->report_type_id = $userInput['report_type_id'];
        if($request['admin_check']){
            $pohvala->admin_check = 1;
        }else{
            $pohvala->admin_check = 0;
           }
        $pohvala->save();
        //dd($userInput);
       return redirect()->route('pohvaleIndex')->with('poruka','Pohvala je uspješno ažurirana');;
       

    }
    public function destroy($id){

        $problem = Problem::find($id);

        $problem->delete();

        return redirect()->route('pohvaleIndex')->with('poruka', 'Pohvala uspješno izbrisana!');
    }
    public function odabrani(){
        $pohvale = Problem::where('report_type_id',2)
                    ->where('admin_check',1)->get();
        $data = [
            'pohvale' => $pohvale
        ];
        return view('pohvale.index',$data);
    }

    public function neodabrani(){
        $pohvale = Problem::where('report_type_id',2)
                    ->where('admin_check',0)->get();
        $data = [
            'pohvale' => $pohvale
        ];
        return view('pohvale.index',$data);
    }
    
}
