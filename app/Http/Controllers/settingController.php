<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index($num)
    {
        if($num == '0'){
            $doc = DB::table('users')->get();
            return view('Setting.setting',['data' => $doc, 'num' =>$num]);
        }
        else if($num == '1'){
            $doc = DB::table('users')->where('id','1')->get();
            return view('Setting.setting',['data' => $doc, 'num' =>$num]);
        }
        else if($num == '2'){
            $doc = DB::table('users')->where('id','0')->get();
            return view('Setting.setting',['data' => $doc, 'num' =>$num]);
        }
        else if($num == '3'){
            $doc = DB::table('users')->get();
            return view('Setting.setting',['data' => $doc, 'num' =>$num]);
        }
        
    }
}
