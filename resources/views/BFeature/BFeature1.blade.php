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

<table class="tableborder-small">
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
<table class="tableBchange">
<tr> 
 @foreach($data as $test2)
 <th>
    <form action="{{ route('changeB' , $test2->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <label for="PID">個人ID:</label>
                        <input type="text" id="PID" name="PID" maxlength="7" value="{{$test2->PersonalID}}"></p>
                    <label for="users_Dep">部門:</label>
                         <input type="text" id="users_Dep" name="users_Dep" value="{{$test2->users_Dep}}"></p>
                   <label for="type">需求類型:</label>
                        <select name="type" id="type">
                            <option value="{{$test2->type}}">
                            {{$type}}
                            </option>
                            <option value="business">業務</option>
                            <option value="web">網站</option>
                            <option value="client">客戶</option>
                        </select></p>
                    <label for="price">需求細節:</label>
                        <input type="text" id="request" name="request" value="{{$test2->request}}"></p>
                <input type="submit" value="Send">
                    
                </form>  
@endforeach
</th>
    </tr>
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
