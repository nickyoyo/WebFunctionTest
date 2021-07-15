@extends('layouts.master')
@extends('layouts.notlogin')

@section('content')
<body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="topic">
                    <h1>功能C-搜尋需求資料</h1>         
               </div>

<form action="/CFeature1/show" method="GET" enctype="multipart/form-data">
@csrf
     <label for="request">搜尋:</label>
          <input type="text" id="request" name="request" placeholder="請輸入需求的關鍵字">&nbsp;
   <input type="submit" value="Send">
   
</form> 


@isset($test)
@if(count($test)>0)


    <table class="tableborder">
    <tr>
    <th class="bordertopic">功能</th>
        <th class="bordertopic">部門</th>
        <th class="bordertopic">類型</th>
        <th class="bordertopic">需求描述</th>
        <th class="bordertopic">處理進度</th>
    </tr>
    @foreach($test as $test1)
    <tr>
    <td class="textw5 text-a-center">
        <form action="{{ route('updateC', $test1->id) }}" method="POST">
        @csrf
        <button>Finish</button>
        </form>
    <td class="textw5 text-a-center">{{$test1->users_Dep}}&nbsp;
    <td class="textw5 text-a-center">{{$test1->type}}&nbsp;   
    <td class="textw30 text-a-left">&nbsp;{{$test1->request}}<br>
    <td class="textw5 text-a-center">{{$test1->status}}&nbsp;
    </tr>
    @endforeach
</table>

@endif 

    
    
@if(count($test)==0)
    <h1>NO Request<h1>
@endif
@endisset
</p>
<input type ="button" onclick="history.back()" value="Back"></input>
   <a href="/" class="back" style="color:black;font-size:10px;">回首頁</a>
   </div>
</body>
@endsection
