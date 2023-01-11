<?php

namespace App\Http\Controllers;

use App\Models\TodoLaravel;
use Illuminate\Http\Request;

class TodoLaravelController extends Controller
{
 
    public function index()
    {
        $todolists = TodoLaravel::all();
        return view('home', compact('todolists'));
    }

 
    public function store(Request $request)
    {
        $info = $request->validate(['data'=>'required']);

        TodoLaravel::create($info);
        return back();
    }

   
    public function destroy(TodoLaravel $todolist)
    {
        $todolist->delete();
        return back();
    }
}
