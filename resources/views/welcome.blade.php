@extends('layouts.master')

@section('content')
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      
                <div class="topic">
                    <h1>歡迎使用本系統</h1>         
               </div>
               @if(isset(Auth::user()->email))
                <li><a href="/create" class="back"  style="color:black">新增商品</a><br>
                <li><a href="/createQ" class="back"  style="color:black">新增問題回報</a>
               @else
               <br><br>             
               @endif
               <div class="topicwel" >

               </div>
             
        </div>
    </body>
@endsection
