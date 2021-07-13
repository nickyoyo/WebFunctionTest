<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class PDController extends Controller
{
    public function PersonalData($id)
    {
        $doc = DB::table('users')->where('id',$id)->get();
        return view('PersonalData',['data' => $doc]);
    }

}
