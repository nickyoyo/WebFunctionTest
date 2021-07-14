@extends('layouts.master')
@extends('layouts.notlogin')

@section('content')
<body>
<div class="container">

                <div class="topic">
                    <h1>功能B-1-選取資料顯示</h1>         
               </div>




@isset($test)
@if(count($test)>0)
<div class="left">
<table class="tableborder-small" align="left">
    @foreach($test as $test1)
    <tr>
    <th class="textw200px text-a-left">&nbsp;<a href="/BFeature1/{{$test1->id}}">{{$test1->request}}<br>
    </tr>
    @endforeach
</table>
</div>
<p>
@endisset
@isset($data)
<div class="right">
<table class="tableborder">
    <tr>
        <th class="bordertopic">部門</th>
        <th class="bordertopic">類型</th>
        <th class="bordertopic">需求描述</th>
        <th class="bordertopic">處理進度</th>
    </tr>
    @foreach($data as $test2)
    <tr>
    <td class="textw5 text-a-center">{{$test2->users_Dep}}&nbsp;
    <td class="textw5 text-a-center">{{$test2->type}}&nbsp;   
    <td class="textw30 text-a-left">&nbsp;{{$test2->request}}<br>
    <td class="textw5 text-a-center">{{$test2->status}}&nbsp;
    </tr>
    @endforeach
</table>

@endif 
@endisset
    
    
@if(count($test)==0)
    <h1>NO Request<h1>
@endif
</div>
</p>
   </div>
</body>
@endsection
