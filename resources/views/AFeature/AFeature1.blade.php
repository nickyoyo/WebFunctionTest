@extends('layouts.master')
@extends('layouts.list')
@extends('layouts.notlogin')

@section('content')
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="topic">
                    <h1>功能A-1-新增資料</h1>         
               </div>
                 <form action="{{ route('uploadA') }}" method="get" enctype="multipart/form-data">
                @csrf
                    <label for="PID">個人ID:</label>
                        <input type="text" id="PID" name="PID" maxlength="7"></p>
                    <label for="users_Dep">部門:</label>
                         <input type="text" id="users_Dep" name="users_Dep"></p>
                   <label for="type">需求類型:</label>
                        <select name="type" id="type">
                            <option value="業務">業務</option>
                            <option value="網站">網站</option>
                            <option value="客戶">客戶</option>
                        </select></p>
                    <label for="price">需求細節:</label>
                        <input type="text" id="request" name="request"></p>
                        @error('PID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                <input type="submit" value="Send">
                    
                </form>
                <input type ="button" onclick="history.back()" value="Back"></input>
                <a href="/" class="back" style="color:black;font-size:10px;">回首頁</a>
                        </div>
    </body>
@endsection
