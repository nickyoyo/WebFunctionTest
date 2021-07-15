<?php

namespace App\Http\Controllers;
use App\Models\adatas;
use App\Models\adatafinishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

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

        foreach($docdata as $data){
        if(strcmp($data->type,'business')==0)$type='業務';
        if(strcmp($data->type,'web')==0)$type='網站';
        if(strcmp($data->type,'client')==0)$type='客戶';
        }
  
        return view('BFeature.BFeature1',['test' => $doc,'data' => $docdata, 'type' => $type]);
    }
    public function ONEchange($id)
    {   
        Session::put('changeID', $id);
        $data = DB::table('adatas')
              ->where('id',$id)
              ->update([
                'PersonalID' => request('PID'),
                'users_Dep' => request('users_Dep'),
                'request' => request('request'),
                'type' => request('type'),
                'status' => "waiting",
            ]); 

            $doc = DB::table('adatas')->orderBy('type','asc')->get();
            $docdata = DB::table('adatas')->where('id',$id)->get();

            foreach($docdata as $data){
                if(strcmp($data->type,'business')==0)$type='業務';
                if(strcmp($data->type,'web')==0)$type='網站';
                if(strcmp($data->type,'client')==0)$type='客戶';
            }

            return view('BFeature.BFeature1',['test' => $doc,'data' => $docdata, 'type' => $type]);
    }
    public function TWO()
    {
        $id = Session::get('changeID' , function() { return -1; });
        $doc = DB::table('adatas')->orderBy('PersonalID','asc')->get();
        return view('BFeature.BFeature2',['test' => $doc, 'id' => $id]);
    }
}
