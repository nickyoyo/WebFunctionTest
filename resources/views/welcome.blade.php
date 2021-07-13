@extends('layouts.master')
@extends('layouts.list')

@section('content')
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="topic">
                    <h1>歡迎使用本系統</h1>         
               </div>
               <ul class="navigation">
                <li>  
                    <dl>
                        <dt><a href="AFeature" target='_parent'>功能A</a></dt>
                        <dd><a href="AFeature1" target='_parent'>功能A-1</a></dd>
                        <dd><a href="AFeature2" target='_parent'>功能A-2</a></dd>
                    </dl>
                </li> 
                <li>  
                    <dl>
                        <dt><a href="BFeature" target='_parent'>功能B</a></dt>
                        <dd><a href="BFeature1" target='_parent'>功能B-1</a></dd>
                        <dd><a href="BFeature2" target='_parent'>功能B-2</a></dd>
                    </dl>
                </li> 
            </ul>

               <br><br>             
               
             
        </div>
    </body>
@endsection
