<table class="tableborder">
    <tr>
        <th class="bordertopic">部門</th>
        <th class="bordertopic">類型</th>
        <th class="bordertopic">需求描述</th>
        <th class="bordertopic">處理進度</th>
    </tr>
    @foreach($testN as $test1)
    <tfoot>
    <tr>
    <td class="textw5 text-a-center">{{$test1->users_Dep}}&nbsp;
    <td class="textw5 text-a-center">{{$test1->type}}&nbsp;   
    <td class="textw30 text-a-left">&nbsp;{{$test1->request}}<br>
    <td class="textw5 text-a-center">{{$test1->status}}&nbsp;
    </tr>
    </tfoot>
    @endforeach

    @foreach($testY as $test1)
    <tfoot>
    <tr>
    <td class="textw5 text-a-center">{{$test1->users_Dep}}&nbsp;
    <td class="textw5 text-a-center">{{$test1->type}}&nbsp;   
    <td class="textw30 text-a-left">&nbsp;{{$test1->request}}<br>
    <td class="textw5 text-a-center">{{$test1->status}}&nbsp;
    </tr>
    </tfoot>
    @endforeach
</table>