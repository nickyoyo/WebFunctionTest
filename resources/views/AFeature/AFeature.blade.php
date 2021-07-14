@extends('layouts.master')
@extends('layouts.list')
@extends('layouts.notlogin')

@section('content')
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="topic">
                    <h1>功能A</h1>         
               </div>
                        <dd><a href="AFeature1" target='_parent'>功能A-1</a>
                        <a href="AFeature2" target='_parent'>功能A-2</a></dd>         
                        <a href="AFeature3" target='_parent'>功能A-3</a></dd>          
        </div>
    </body>
@endsection
