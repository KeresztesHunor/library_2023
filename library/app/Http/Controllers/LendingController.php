<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;

class LendingController extends Controller
{
    public function index()
    {
        return response()->json(Lending::all());
    }

    public function show($id)
    {
        return response()->json(Lending::find($id));
    }

    public function store(Request $request)
    {
        $lending = new Lending();
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
        //return redirect("/lending/list");
    }

    public function update(Request $request, $id)
    {
        $lending = Lending::find($id);
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
        //return redirect("/lending/list");
    }

    public function delete($id)
    {
        Lending::find($id)->delete();
        //return redirect("/lending/list");
    }
}
