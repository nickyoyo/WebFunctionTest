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
        $doc = DB::table('adatas')->orderBy('type','asc')->get();
        $docTA = DB::table('adatas')->where('type','business')->get();
        $docTB = DB::table('adatas')->where('type','web')->get();
        $docTC = DB::table('adatas')->where('type','client')->get();
        $docAll = DB::table('adatas')->get();
        $TotalPage =  count($docAll)/10+1;
        if(count($docAll)%10==0 && $TotalPage!=0)$TotalPage--;
        return view('AFeature.AFeature2',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'page'=>'1', 'docPage' => (int)$TotalPage,]);
    }
    public function TWOpage()
    {
        $page = request('Page');
        //$doc = DB::table('adatas')->orderBy('status','desc')->orderBy('type','desc')->whereBetween('id',array($pagec*10+1, $pagec*10+10))->get();
        $doc = DB::table('adatas')->orderBy('type','asc')->get();
        $docTA = DB::table('adatas')->where('type','business')->get();
        $docTB = DB::table('adatas')->where('type','web')->get();
        $docTC = DB::table('adatas')->where('type','client')->get();
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

      public function Three()
      {
          //$doc = DB::table('adatas')->orderBy('type','desc')->whereBetween('id',array(1, 10))->get();
          $doc = DB::table('adatafinishes')->orderBy('type','asc')->get();
          $docTA = DB::table('adatafinishes')->where('type','business')->get();
          $docTB = DB::table('adatafinishes')->where('type','web')->get();
          $docTC = DB::table('adatafinishes')->where('type','client')->get();

          $docAll = DB::table('adatafinishes')->get();
          $TotalPage =  count($docAll)/10+1;
          if(count($docAll)%10==0 && $TotalPage!=0)$TotalPage--;
          return view('AFeature.AFeature3',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'page'=>'1', 'docPage' => (int)$TotalPage,]);
      }
      public function Threepage()
    {
        $page = request('Page');
        //$doc = DB::table('adatas')->orderBy('status','desc')->orderBy('type','desc')->whereBetween('id',array($pagec*10+1, $pagec*10+10))->get();
        $doc = DB::table('adatafinishes')->orderBy('type','asc')->get();
        $docTA = DB::table('adatafinishes')->where('type','business')->get();
        $docTB = DB::table('adatafinishes')->where('type','web')->get();
        $docTC = DB::table('adatafinishes')->where('type','client')->get();

        $docAll = DB::table('adatafinishes')->get();
        $TotalPage =  count($docAll)/10+1;
        if(count($docAll)%10==0 && $TotalPage!=0)$TotalPage--;
        return view('AFeature.AFeature3',['test' => $doc, 'docTA' => $docTA, 'docTB' => $docTB, 'docTC' => $docTC, 'page'=>$page, 'docPage' => (int)$TotalPage,]);
    }

    public function Four()
    {
        //$doc = DB::table('adatas')->orderBy('type','desc')->whereBetween('id',array(1, 10))->get();
        $docN = DB::table('adatas')->orderBy('type','asc')->get();
        $docY = DB::table('adatafinishes')->orderBy('type','asc')->get();

        $docNTA = DB::table('adatas')->where('type','business')->get();
        $docNTB = DB::table('adatas')->where('type','web')->get();
        $docNTC = DB::table('adatas')->where('type','client')->get();

        $docYTA = DB::table('adatafinishes')->where('type','business')->get();
        $docYTB = DB::table('adatafinishes')->where('type','web')->get();
        $docYTC = DB::table('adatafinishes')->where('type','client')->get();

        $docNAll = DB::table('adatas')->get();
        $docYAll = DB::table('adatafinishes')->get();
        $docAll = count($docNAll)+count($docYAll);
        $TotalPage =  $docAll/10+1;

        if($docAll%10==0 && $TotalPage!=0)$TotalPage--;
        return view('AFeature.AFeature4',['testN' => $docN,'testY' => $docY , 'docNTA' => $docNTA, 'docNTB' => $docNTB, 'docNTC' => $docNTC, 'docYTA' => $docYTA, 'docYTB' => $docYTB, 'docYTC' => $docYTC, 'page'=>'1', 'docPage' => (int)$TotalPage,]);
    }
    public function Fourpage()
    {
        $page = request('Page');

        $docN = DB::table('adatas')->orderBy('type','asc')->get();
        $docY = DB::table('adatafinishes')->orderBy('type','asc')->get();
        //$doc = DB::table('adatas')->orderBy('status','desc')->orderBy('type','desc')->whereBetween('id',array($pagec*10+1, $pagec*10+10))->get();
        $docNTA = DB::table('adatas')->where('type','business')->get();
        $docNTB = DB::table('adatas')->where('type','web')->get();
        $docNTC = DB::table('adatas')->where('type','client')->get();

        $docYTA = DB::table('adatafinishes')->where('type','business')->get();
        $docYTB = DB::table('adatafinishes')->where('type','web')->get();
        $docYTC = DB::table('adatafinishes')->where('type','client')->get();

        $docNAll = DB::table('adatas')->get();
        $docYAll = DB::table('adatafinishes')->get();
        $docAll = count($docNAll)+count($docYAll);
        $TotalPage =  $docAll/10+1;

        if($docAll%10==0 && $TotalPage!=0)$TotalPage--;
        return view('AFeature.AFeature4',['testN' => $docN,'testY' => $docY , 'docNTA' => $docNTA, 'docNTB' => $docNTB, 'docNTC' => $docNTC, 'docYTA' => $docYTA, 'docYTB' => $docYTB, 'docYTC' => $docYTC, 'page'=>$page, 'docPage' => (int)$TotalPage,]);
    }
}
