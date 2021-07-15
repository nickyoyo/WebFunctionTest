@extends('layouts.master')
@extends('layouts.notlogin')

@section('content')

<table class="tableborder">
    <tr>

        <th class="bordertopic">個人ID</th>
        <th class="bordertopic">部門</th>
        <th class="bordertopic">需求類型</th>
        <th class="bordertopic">需求細節</th>
    </tr>
    @foreach($test as $test1)
    <tr>
    @if($test1->id == $id)
    <td class="textw5 text-a-center" style="color:red;">{{$test1->PersonalID}}&nbsp;
    <td class="textw5 text-a-center" style="color:red;">{{$test1->users_Dep}}&nbsp;   
    <td class="textw5 text-a-center" style="color:red;">&nbsp;{{$test1->type}}<br>
    <td class="textw30 text-a-left" style="color:red;">{{$test1->request}}&nbsp;
    @else
    <td class="textw5 text-a-center">{{$test1->PersonalID}}&nbsp;
    <td class="textw5 text-a-center">{{$test1->users_Dep}}&nbsp;   
    <td class="textw5 text-a-center">&nbsp;{{$test1->type}}<br>
    <td class="textw30 text-a-left">{{$test1->request}}&nbsp;
    @endif
    </tr>
    @endforeach
</table>

@endsection
