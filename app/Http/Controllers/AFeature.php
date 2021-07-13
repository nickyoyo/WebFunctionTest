<?php

namespace App\Http\Controllers;
use App\Models\adatas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AFeature extends Controller
{
    public function index()
    {
        return view('AFeature.AFeature');
    }
    public function ONE()
    {
        return view('AFeature.AFeature1');
    }
    public function AUpload(){
        adatas::create([
            'PersonalID' => request('PID'),
            'users_Dep' => request('users_Dep'),
            'request' => request('request'),
            'type' => request('type'),
            'status' => "waiting",
        ]); 
         return redirect('/');
      }
    public function TWO()
    {
        $doc = DB::table('adatas')->orderBy('type','desc')->whereBetween('id',array(1, 2))->get();
        $docTA = DB::table('adatas')->where('type','業務')->where('status','waiting')->get();
        $docTB = DB::table('adatas')->where('type','網站')->where('status','waiting')->get();
        $docTC = DB::table('adatas')->where('type','客戶')->where('status','waiting')->get();
        $docAll = DB::table('adatas')->get();
        $TotalPage =  count($docAll)/1;
        return view('AFeature.AFeature2',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'docPage' => $TotalPage,]);
    }
    public function AUpdate($id){
        DB::table('adatas')
              ->where('id',$id)
              ->update([
                'status' => "Finish",
            ]); 
         return redirect('AFeature2');
      }
}
