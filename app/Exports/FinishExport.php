<?php

namespace App\Exports;

use App\Models\adatas;
use App\Models\adatafinishes;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class FinishExport implements FromView
{
        public function view(): View
        {
            return view('AFeature.AFeatureExport', [
                'dataY' => adatafinishes::all(),
                'test' => DB::table('adatafinishes')->orderBy('type','desc')->get(), 
            ]);
        }
}
