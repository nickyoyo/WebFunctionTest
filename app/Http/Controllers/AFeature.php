<?php

namespace App\Http\Controllers;
use App\Models\adatas;
use App\Models\adatafinishes;
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
        //$doc = DB::table('adatas')->orderBy('type','desc')->whereBetween('id',array(1, 10))->get();
        $doc = DB::table('adatas')->orderBy('type','desc')->get();
        $docTA = DB::table('adatas')->where('type','業務')->where('status','waiting')->get();
        $docTB = DB::table('adatas')->where('type','網站')->where('status','waiting')->get();
        $docTC = DB::table('adatas')->where('type','客戶')->where('status','waiting')->get();
        $docAll = DB::table('adatas')->get();
        $TotalPage =  count($docAll)/10+1;
        if(count($docAll)%10==0 && $TotalPage!=0)$TotalPage--;
        return view('AFeature.AFeature2',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'page'=>'1', 'docPage' => (int)$TotalPage,]);
    }
    public function TWOpage()
    {
        $page = request('Page');
        //$doc = DB::table('adatas')->orderBy('status','desc')->orderBy('type','desc')->whereBetween('id',array($pagec*10+1, $pagec*10+10))->get();
        $doc = DB::table('adatas')->orderBy('type','desc')->get();
        $docTA = DB::table('adatas')->where('type','業務')->where('status','waiting')->get();
        $docTB = DB::table('adatas')->where('type','網站')->where('status','waiting')->get();
        $docTC = DB::table('adatas')->where('type','客戶')->where('status','waiting')->get();
        $docAll = DB::table('adatas')->get();
        $TotalPage =  count($docAll)/10+1;
        if(count($docAll)%10==0 && $TotalPage!=0)$TotalPage--;
        return view('AFeature.AFeature2',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'page'=>$page, 'docPage' => (int)$TotalPage,]);
    }
    public function AUpdate($id){
        $doc = DB::table('adatas')->where('id',$id)->get();
        foreach($doc as $data){
            adatafinishes::create([
                'id' => $data->id,
                'created_at' => $data->created_at,
                'updated_at' => $data->updated_at,
                'PersonalID' => $data->PersonalID,
                'users_Dep' => $data->users_Dep,
                'request' => $data->request,
                'type' => $data->type,
                'status' => "finish",
            ]); 
        }
        $doc = adatas::findorFail($id);
        $doc -> delete();

        return redirect('AFeature2');
      }
}
