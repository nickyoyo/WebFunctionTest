<?php

namespace App\Http\Controllers;
use App\Models\adatas;
use App\Models\adatafinishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BFeature extends Controller
{
    public function index()
    {
        return view('BFeature.BFeature');
    }
    public function ONE()
    {
        $doc = DB::table('adatas')->orderBy('type','asc')->get();
        $docTA = DB::table('adatas')->where('type','business')->get();
        $docTB = DB::table('adatas')->where('type','web')->get();
        $docTC = DB::table('adatas')->where('type','client')->get();
        $docAll = DB::table('adatas')->get();
        $TotalPage =  count($docAll)/10+1;
        if(count($docAll)%10==0 && $TotalPage!=0)$TotalPage--;
        return view('BFeature.BFeature1',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'page'=>'1', 'docPage' => (int)$TotalPage,]);
    }
    public function ONEshow($id)
    {
        $doc = DB::table('adatas')->orderBy('type','asc')->get();
        $docdata = DB::table('adatas')->where('id',$id)->get();
        return view('BFeature.BFeature1',['test' => $doc,'data' => $docdata]);
    }
    public function TWO()
    {
        return view('BFeature.BFeature2');
    }
}
