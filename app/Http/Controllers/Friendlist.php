<?php

namespace App\Http\Controllers;

use App\Models\Friendlist as ModelsFriendlist;
use Illuminate\Http\Request;

class Friendlist extends Controller
{
    public function friendlists(Request $request)
    {
        $friend = new ModelsFriendlist();
        $friend->Slambook_id = $request->slambookid;
        $friend->Friend_Name = $request->name;
        $friend->Email = $request->email;
        $friend->Phone_no = $request->mobile;
        $friend->save();
        return view('dashboard');
    }
}
