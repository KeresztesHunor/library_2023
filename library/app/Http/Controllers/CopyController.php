<?php

namespace App\Http\Controllers;

use App\Models\Copy;
use Illuminate\Http\Request;

class CopyController extends Controller
{
    public function index()
    {
        return response()->json(Copy::all());
    }

    public function show($id)
    {
        return response()->json(Copy::find($id));
    }

    public function store(Request $request)
    {
        $copy = new Copy();
        $copy->book_id = $request->book_id;
        $copy->hardcovered = $request->hardcovered;
        $copy->status = $request->status;
        $copy->publication = $request->publication;
        $copy->save();
        //return redirect("/copy/list");
    }

    public function update(Request $request, $id)
    {
        $copy = Copy::find($id);
        $copy->book_id = $request->book_id;
        $copy->hardcovered = $request->hardcovered;
        $copy->status = $request->status;
        $copy->publication = $request->publication;
        $copy->save();
        //return redirect("/copy/list");
    }

    public function delete($id)
    {
        Copy::find($id)->delete();
        //return redirect("/copy/list");
    }
}
