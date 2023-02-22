<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Problem;
use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    
    public function index(){
        $problemi = Problem::where('report_type_id',1)->get();
        $data = [
            'problemi' => $problemi
        ];
        return view('problems.index',$data);
    }
    public function create($id){
        $temp = $id;
        $kategorije = Category::all();
        $pod_kategorije = Sub_category::all();
        $grad = City::all();
        $data = [
            'kategorija' => $kategorije,
            'pod_kategorije' => $pod_kategorije,
            'temp' => $temp,
            'grad' => $grad
        ];
      
        return view('problems.create',$data);
    }
    public function subCat($id){
        echo json_encode(Sub_category::where('category_id', $id)->get());
    }
    public function store(Request $request){
        
        $userInput = $request->validate([
            'description' => 'required',
            'street' => 'string',
            'city_id' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'report_type_id' => 'required'
        ]);

        if(request()->hasFile('file')){
            $userInput['file'] = request()->file('file')->store('file','public');
        }
        
        Problem::create($userInput);
        return redirect()->route('pocetna')->with('poruka','Hvala Vam na informaciji!');
   
    }
    public function edit($id){
        $problem = Problem::find($id);
        $gradovi = City::all();
        $kategorije = Category::all();
        $podkategorije = Sub_category::all();
        $data = [
            'problem'=>$problem,
            'gradovi'=>$gradovi,
            'kategorije' => $kategorije,
            'podkategorije'=>$podkategorije
        ];
        return view('problems.edit',$data);
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
        
        
        $problem = Problem::find($id);
        $problem->description = $userInput['description'];
        $problem->street = $userInput['street'];
        $problem->city_id = $userInput['city_id'];
        $problem->category_id = $userInput['category_id'];
        $problem->sub_category_id = $userInput['sub_category_id'];
        $problem->report_type_id = $userInput['report_type_id'];
        if($request['admin_check']){
            $problem->admin_check = 1;
        }else{
            $problem->admin_check = 0;
           }
        $problem->save();
       return redirect()->route('problemiIndex')->with('poruka','Problem je uspješno ažuriran');
    }
    public function destroy($id){

        $problem = Problem::find($id);

        $problem->delete();

        return redirect()->route('problemiIndex')->with('poruka', 'Problem uspješno izbrisan!');
    }
    public function odabrani(){
        $problemi = Problem::where('report_type_id',1)
                    ->where('admin_check',1)->get();
        $data = [
            'problemi' => $problemi
        ];
        return view('problems.index',$data);
    }

    public function neodabrani(){
        $problemi = Problem::where('report_type_id',1)
                    ->where('admin_check',0)->get();
        $data = [
            'problemi' => $problemi
        ];
        return view('problems.index',$data);
    }
}
