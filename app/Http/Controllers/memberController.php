<?php

namespace App\Http\Controllers;
use App\Models\member;
use App\Models\comitte;
use Illuminate\Http\Request;

class memberController extends Controller
{

    function index(Comitte $comitte) {
        // $member='4';
        $members = $comitte->members;
        return view('member.index', compact('comitte', 'members'));

        $members = member::all();
        // $members = member::where('comitte_id', $comitte_id)->get();


    }
    function add(Request $request, Comitte $comitte) {
        if ($request->getMethod()=="POST") {
            $member = new member();
            $member->name = $request->name;
            $member->phone = $request->phone;
            $member->address = $request->address;
            $member->doc = $request->doc;
            $member->comitte_id = $comitte->id;
            $member->doc_no = $request -> doc_no;
          $member->image = $request->image->store('upload/member','public');
            $member->save();
            return redirect()->back();
            $comitte->members()->create($request->all());
            return redirect()->route('member.index',$comitte);
        }
        else {
            return view("member.add");
        }
    }
    function delete($id) {
        $member = member::findOrfail($id);
        $member->delete();
        return redirect()->back();
    }
}
