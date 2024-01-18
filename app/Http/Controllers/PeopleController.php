<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    //
    public function adding(Request $request){
        $items = new People();

        $items->gender = $request->gender;
        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->age = $request->age;
    
        $items->save();
        return response()->json('Added SUCCESS');
    }

    public function edit(Request $request){
        $items = People::findorfail($request->id);

        $old_rec = People::find($request->id);

        $items->gender = $request->gender;
        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->age = $request->age;
    
        $items->update();
        return response()->json(array('old_record' => $old_rec, 'new_record' => $items,));
    }

    public function removing(Request $request){
        $items = People::findorfail($request->id)->delete();

        return response()->json('Remove SUCCESS');
    }

    public function getAll(Request $request){
        $items = People::all();

        return response()->json($items);
    }

    public function getOne($id){
        $items = People::find($id);

        return response() -> json($items);
    }
}
