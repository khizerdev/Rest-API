<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sclass;

class SclassController extends Controller
{
    //

    public function index()
    {
        $class = Sclass::latest()->get();

        return response()->json($class);
    }
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required|unique:sclasses'
        ]);

        Sclass::create([
            'class_name' => $request->class_name
        ]);

        return response('Student Class inserted succssfully');
    }
    public function edit($id)
    {

        $class = Sclass::findOrFail($id);

        return response()->json($class);
    }
    public function update(Request $request , $id)
    {

        $class = Sclass::findOrFail($id);

        $class->class_name = $request->class_name;
        $class->save(); 

        return response('Student Class Updated succssfully');
    }

    public function delete($id)
    {

        $class = Sclass::findOrFail($id);

        $class->delete();

        return response('Student Class Deleted succssfully');
    }
}
