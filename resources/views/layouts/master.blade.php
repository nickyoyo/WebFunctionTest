<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Laravel SystemWeb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    
    <style>
          
            .topic{
                position: relative;
                margin-top:10px;
                margin-left:450px;
            }
            .topicwel{
                position: relative;
                margin-left:470px;
                margin-top:20px;
                color:#000000;
            }
            .topictype{
                position: relative;
                margin-left:470px;
                margin-top:20px;
                border:1px solid black;
                color:#000000;
            }
            .Topicword{
                    padding:0px 10px;
                    color:#555;
                    background-color:#fff;
                    font-size:20px;
                    font-weight:solid;
            }
            .login{
                position: relative;
                color:#000000;
            }
            .tableborder{
                width:800px;
                margin: 0px auto;
                border:1px solid black;
                border-collapse:collapse;
            }
            .textw3 {
                    width:3%;
                    padding:10px 0px;
                    color:#555;
                    background-color:#fff;
                    border:1px solid black;
                    font-size:10px;
                    font-weight:solid;
            }
            .textw5 {
                    width:5%;
                    padding:10px 0px;
                    color:#555;
                    background-color:#fff;
                    border:1px solid black;
                    font-size:10px;
                    font-weight:solid;
            }
            .textw10 {
                    width:10%;
                    padding:10px 0px;
                    color:#555;
                    background-color:#fff;
                    border:1px solid black;
                    font-size:10px;
                    font-weight:solid;
            }
            .textw12 {
                    width:12%;
                    padding:10px 0px;
                    color:#555;
                    background-color:#fff;
                    border:1px solid black;
                    font-size:10px;
                    font-weight:solid;
            }
            .textw20 {
                width:20%;
                padding:10px 0px;
                color:#555;
                background-color:#fff;
                border:1px solid black;
                font-size:10px;
                font-weight:solid;
            }
            .textw30 {
                width:30%;
                padding:10px 0px;
                color:#555;
                background-color:#fff;
                border:1px solid black;
                font-size:10px;
                font-weight:solid;
            }
            .bordertopic{
                font-size:10px;
                font-weight:solid;

                border:1px solid black;
            }
            .text-a-left{
                position: relative;
                text-align:left;
                padding: 5px;
            }
            .text-a-center{
                text-align:center;
            }
            form {
                display: inline;
            }
            .buttonback {
                width:90px;
                height:25px;
            }
            .countdata{
                color:#555;
                font-weight:solid;
                font-size:20px;
            }
            label{
                float:left;
                width:80px;
            }
        </style>
</head>
<body>
@section('sidebar')
    
        <div class="container-fluid">
            <div class="navbar-header">       
                <a class="navbar-brand" href="/">首頁</a>
                <a class="navbar-brand" href="/news">今日消息</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(!Auth::user())
                        <li><a href="/login">登入</a></li>
                        <li><a href="/register">註冊</a></li>
                    @else
                        <li><a href="{{ route('PD', Auth::user()->id )}}">個人資料 <span class="fa fa-address-card" aria-hidden="true"></span></a></li>
                        <li><a href="/DepFeature">部門功能 <span class="fa fa-suitcase"></span></a></li>
                        <li><a>{{ Auth::user()->name }}   <span class="d-none"></span></a></li>
                        <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></a></li>
                    @endif
                </ul>
            </div>
        </div>



<div class="container">
    @yield('content')   
</div>
</body>
</html>