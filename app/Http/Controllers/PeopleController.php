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

        $items->gender = $request->gender;
        $items->name = $request->name;
        $items->surname = $request->surname;
        $items->age = $request->age;
    
        $items->update();
        return response()->json('Edit SUCCESS');
    }

    public function removing(Request $request){
        $items = People::findorfail($request->id)->delete();

        return response()->json('Remove SUCCESS');
    }
}
