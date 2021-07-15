<?php

namespace App\Http\Controllers;
use App\Models\adatas;
use App\Models\adatafinishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CFeature extends Controller
{
    public function index()
    {
        return view('CFeature.CFeature');
    }
    public function ONE()
    {
       return view('CFeature.CFeature1');
    }
    public function ONEshow()
    { 
        $n = request('request');
        Session::put('changerequest', $n);
        $doc = DB::table('adatas')->where('request','LIKE','%'.$n.'%')->orderBy('type','desc')->get();

        return view('CFeature.CFeature1',['test' => $doc , 'changerequest' => $n]);
    }
    public function ONEchange($id){
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

        $changerequest = Session::get('changerequest');
        $doc = DB::table('adatas')->where('request','LIKE','%'.$changerequest.'%')->orderBy('type','desc')->get();

        return view('CFeature.CFeature1',['test' => $doc, 'changerequest' => $changerequest]);
      }

    public function TWO()
    {

        return view('CFeature.CFeature2',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC]);
    }
}
