<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    public function index()
    {
        $class = Subject::latest()->get();

        return response()->json($class);
    }
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'subject_name' => 'required|unique:subjects',
        ]);

        Subject::create([
            'class_id' => $request->class_id,
            'subject_name' => $request->subject_name,
            'subject_code' => $request->subject_code,
        ]);

        return response('Student Subject inserted succssfully');
    }
    public function edit($id)
    {

        $class = Subject::findOrFail($id);

        return response()->json($class);
    }
    public function update(Request $request , $id)
    {

        $class = Subject::findOrFail($id);

        $class->class_id = $request->class_id;
        $class->subject_name = $request->subject_name;
        $class->subject_code = $request->subject_code;
        $class->save(); 

        return response('Student Subject Updated succssfully');
    }

    public function delete($id)
    {

        $class = Subject::findOrFail($id);

        $class->delete();

        return response('Student Subject Deleted succssfully');
    }
}
