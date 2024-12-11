<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testmodel;

class testcontroller extends Controller
{
    public function show(){
       return view("show");
    }

    public function enterdb(Request $request){
        //    dd($request);
    $data = $request->validate([
        "item"=>"required|string|max:255",
        "des"=>"required|string|max:255"
    ]);
    
    $test = testmodel::create($data);
    return redirect("show")->with("success","success");
    }

    public function showdata(){
        $items = testmodel::all();
        return view("viewdata",compact("items"));
    }

    public function updatedata($id){
            $item = testmodel::findOrFail($id);
            return view("edit",compact("item"));
    }

    public function update (Request $request, $id){
           $validatedData = $request->validate([
            "item"=> "required|string|max:255",
            "des"=> "required|string|max:255"
           ]);
           $item = testmodel::findOrFail($id);  
           $item->update($validatedData);
           return redirect()->route("table")->with("success","Item Updatad Successfully");
    }

    public function table(){
        $items = testmodel::all();
        return view("table",compact("items"));
    }

    public function destroy ($id){
        $item = testmodel::find($id);

        if(!$item){
            return redirect()->route("table")->with("error","Item Not Found");
        }
        $item->delete();
        return redirect()->route("table")->with("success","Successfully Deleted !");
    }
    

}
