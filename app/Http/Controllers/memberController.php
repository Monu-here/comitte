<?php

namespace App\Http\Controllers;
use App\Models\member;
use App\Models\comitte;
use Illuminate\Http\Request;

class memberController extends Controller
{

    function index(comitte $comitte) {
        // dd($comitte);
        // $member='4';
        $members = member::where('comitte_id', $comitte->id)->get();

        return view('member.index', compact('comitte', 'members'));

        // $members = member::all();


    }
    function add(Request $request,  $comitte_id) {
        if ($request->getMethod()=="POST") {
            $member = new member();
            $member->name = $request->name;
            $member->phone = $request->phone;
            $member->address = $request->address;
            $member->doc = $request->doc;
            $member->comitte_id = $comitte_id;
            $member->doc_no = $request -> doc_no;
          $member->image = $request->image->store('upload/member','public');
            $member->save();
            return redirect()->back();

        }
        else {
            return view("member.add",compact('comitte_id'));
        }
    }
    function delete($id) {
        $member = member::findOrfail($id);
        $member->delete();
        return redirect()->back();
    }
}
