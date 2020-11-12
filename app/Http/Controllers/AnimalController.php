<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $datas=Animal::all();
        return view('welcome',compact('datas'));
    }
    public function create(){
        return view('add');
    }
    public function store(Request $request){
        $animal= new Animal;
        $animal->espece=$request->espece;
        $animal->age=$request->age;
        $animal->save();
        return redirect()->back();
    }
    public function show($id){
        $animal=Animal::find($id);
        return view('show',compact('animal'));
    }
    public function destroy($id){
        $animal=Animal::find($id);
        $animal->delete();
        return redirect('/');
    }
    public function edit($id){
        $animal=Animal::find($id);
        return view('edit',compact('animal'));
    }
    public function update($id,Request $request){
        $animal=Animal::find($id);
        $animal->espece=$request->espece;
        $animal->age=$request->age;
        $animal->save();
        return view('show',compact('animal'));

    }
}
