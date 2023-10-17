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

    public function show($user_id, $copy_id, $start)
    {
        return response()->json(Lending::where('user_id', $user_id)->where('copy_id', $copy_id)->where('start', $start)->get());
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

    public function destroy($user_id, $copy_id, $start)
    {
        Lending::where('user_id', $user_id)->where('copy_id', $copy_id)->where('start', $start)->get()->delete();
        //return redirect("/lending/list");
    }
}
