<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }
    public function create(){
        return view('admin.create');
    }
    public function edit($id){
        $data = User::find($id);
        return view('admin.edit', [
            'data' => $data
        ]);
    }

    public function update($id){
        $userInput = request()->validate([
            'name' => 'required|min:3',
            'email'=>['required','email'],
            'password'=>'required|confirmed|min:6'
        ]);
        $userInput['password'] = bcrypt($userInput['password']);
        $user = User::find($id);

        $user->update($userInput);
        return redirect()->route('adminList')->with('poruka','Admin je uspjesno uređen!');
    }

    public function destroy($id){

        $problem = User::find($id);

        $problem->delete();

        return redirect()->route('adminList')->with('poruka', 'Korisnik je uspješno izbrisan');
    }

    public function store(Request $request){
        $userInput = $request->validate([
            'name' => 'required|min:3',
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ]);
        $userInput['password'] = bcrypt($userInput['password']);
        User::create($userInput);
        return redirect()->route('adminList')->with('poruka','Admin je uspjesno dodan!');
    }
    
    
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('pocetna');
    }
    public function authenticate(Request $request){
        $userInput = $request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($userInput)){
            $request->session()->regenerate();
            return redirect()->route('pohvaleIndex');
        }
        return back()->withErrors([
            'email'=> 'invalid credentials'
        ])->onlyInput('email');
    }

    public function list(){
        $data = User::paginate(8);
        return view('admin.admini', [
            'data' => $data
        ]);
    }
}
