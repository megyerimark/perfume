<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    
    public function getPerfumes()
   
    {
        $data = Perfume::get();
        return view('perfume', compact("data"));
    }

    public function add(){
        return view('add');
    }


    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'type' =>'required',
            'price' =>'required',
        ],[
            "name.required"=> "Név mező kitöltése kötelező ,ha nem töltöd ki akkor   Egyes!",
            "type.required"=> "Típus mező kitöltése kötelező,ha nem töltöd ki akkor   Egyes!",
            "price.required"=> "Ár mező kitöltése kötelező, ha nem töltöd ki akkor   Egyes!",
        ]);
    $name = $request->name;
    $type = $request->type;
    $price = $request->price;

    $per = new Perfume();
    $per->name =$name;
    $per->type =$type;
    $per->price =$price;

    $per->save();

    return redirect()
    ->back()
    ->with('success', 'Sikeresen hozzáadtál egy új parfümöt');



    }
    public function edit($id){
        $data = Perfume::where('id','=', $id)->first();
        return view('add' , compact('data'));
       
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'type' =>'required',
            'price' =>'required',
        ]
        );


       
        $id = $request->id;
        $name = $request->name;
        $type = $request->type;
        $price = $request->price;
       

        Perfume::where('id','=',$id)->update([
            'name'=>$name,
            'type'=>$type,
            'price'=>$price
            


        ]);
        return redirect()->back()->with('success', 'Sikeresen hozzáadtál egy új parfümöt');
        

            
    }
    public function delete($id){
        Perfume::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Törölve');

    }
}
