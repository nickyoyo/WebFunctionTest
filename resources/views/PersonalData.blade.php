@extends('layouts.master')


@section('content')

<table class="tableborder">
    <tr>
        <th class="bordertopic">名稱</th>
        <th class="bordertopic">信箱</th>
        <th class="bordertopic">部門</th>
        <th class="bordertopic">職位</th>
    </tr>
    @foreach($data as $test1)
    <tfoot>
    <tr>
   
    <td class="textw30 text-a-left">&nbsp;
    {{$test1->name}}&nbsp;
    <td class="textw5 text-a-center">{{$test1->email}}&nbsp;
    <td class="textw5 text-a-center">
      
        &nbsp;
    <td class="textw30 text-a-left">&nbsp;<br>
    </tr>
    </tfoot>
    @endforeach
</table>

@endsection
