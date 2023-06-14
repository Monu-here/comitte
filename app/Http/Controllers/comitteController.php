<?php

namespace App\Http\Controllers;

use App\Models\comitte;
use Illuminate\Http\Request;

class comitteController extends Controller
{

    public function add(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $comitte = new comitte();
            $comitte->name = $request->name;
            $comitte->country = $request->country;
            $comitte->state = $request->state;
            $comitte->district = $request->district;
            $comitte->city = $request->city;
            $comitte->save();
            return redirect()->back();
        } else {
            return view('comitte.add');
        }
    }
    public function index()
    {
        $comittes = comitte::all();
        // dd($comittes);
        return view('comitte.index', compact('comittes'));
    }
    public function delete($id)
    {
        $comitte = comitte::findOrfail($id);
        $comitte->delete();
        return redirect()->back();
    }

}
