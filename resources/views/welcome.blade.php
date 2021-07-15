@extends('layouts.master')
@extends('layouts.list')

@section('content')
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="topic">
                    <h1>歡迎使用本系統</h1>         
               </div>
               <br><br>
               <ul class="navigation">
                <li>  
                    <dl>
                        <dt><a href="AFeature" target='_parent'>功能A</a></dt>
                        <dd><a href="AFeature1" target='_parent'>功能A-需求新增</a></dd>
                        <dd><a href="AFeature2" target='_parent'>功能A-待完成需求</a></dd>
                        <dd><a href="AFeature3" target='_parent'>功能A-已完成需求</a></dd>
                        <dd><a href="AFeature4" target='_parent'>功能A-所有需求</a></dd>
                    </dl>
                    </li> 
                <li>  
                    <dl>
                        <dt><a href="BFeature" target='_parent'>功能B</a></dt>
                        <dd><a href="BFeature1" target='_parent'>功能B-修改特定需求</a></dd>
                        <dd><a href="BFeature2" target='_parent'>功能B-顯示所有需求</a></dd>
                    </dl>
                </li> 
                <li> 
                    <dl>
                        <dt><a href="CFeature" target='_parent'>功能C</a></dt>
                        <dd><a href="CFeature1" target='_parent'>功能C-1</a></dd>
                        <dd><a href="CFeature2" target='_parent'>功能C-2</a></dd>
                    </dl>
                </li> 
                <li> 
                    <dl>
                        <dt><a href="DFeature" target='_parent'>功能D</a></dt>
                        <dd><a href="DFeature1" target='_parent'>功能D-1</a></dd>
                        <dd><a href="DFeature2" target='_parent'>功能D-2</a></dd>
                    </dl>
                </li> 
                <li> 
                    <dl>
                        <dt><a href="EFeature" target='_parent'>功能E</a></dt>
                        <dd><a href="EFeature1" target='_parent'>功能E-1</a></dd>
                        <dd><a href="ECFeature2" target='_parent'>功能E-2</a></dd>
                    </dl>
                </li> 
            </ul>

               <br><br>             
               
             
        </div>
    </body>
@endsection