@extends('layouts.master')


@section('content')

<body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="topic">
                    <h1>設定</h1>         
               </div>
               <div class="tableborder">
                    <a href="/setting/0"> <h4>&nbsp;設定1
                    <a href="/setting/1"> 設定2
                    <a href="/setting/2"> 設定3
                    <a href="/setting/3"> 設定4</li></h4></a>
               </div>
      
<table class="tablemidborder">
    
        @if($num=='0')
        <tr>
        <th class="settingtopic"><h3>設定1</h3></th>
        </tr>
        <tr>  
        <td class="bordertopic">設定1細節<p>
        1<p>1<p>1<p>1<p>1<p>
        </tr>
        @endif

        @if($num=='1')
        <tr>
        <th class="settingtopic"><h3>設定2</h3></th>
        </tr>
        <tr>  
        <td class="bordertopic">設定2細節<p>
        2<p>2<p>2<p>2<p>2<p>
        </tr>
        @endif
      
        @if($num=='2')
        <tr>
        <th class="settingtopic"><h3>設定3</h3></th>
        </tr>
        <tr>  
        <td class="bordertopic">設定3細節<p>
        3<p>3<p>3<p>3<p>3<p>
        </tr>
        @endif

        @if($num=='3')
        <tr>
        <th class="settingtopic"><h3>設定4</h3></th>
        </tr>
        <tr>  
        <td class="bordertopic">設定4細節<p>
        4<p>4<p>4<p>4<p>4<p>
        </tr>
        @endif

</table>
</div>
</body>
@endsection
