<?php

namespace App\Http\Controllers;
use App\Exports\WaitExport; 
use App\Exports\FinishExport; 
use App\Exports\AllExport; 
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExcelController extends Controller
{
    public function exportY() 
    {
        return Excel::download(new FinishExport(), '已完成需求.xlsx');
    }
    public function exportN() 
    {
        return Excel::download(new WaitExport(), '待完成需求.xlsx');
    }
    public function exportAll() 
    {
        return Excel::download(new AllExport(), '所有需求.xlsx');
    }
}
