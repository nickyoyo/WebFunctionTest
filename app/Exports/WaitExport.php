<?php

namespace App\Exports;

use App\Models\adatas;
use App\Models\adatafinishes;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class WaitExport implements FromView
{
        public function view(): View
        {
            return view('AFeature.AFeatureExport', [
                'dataN' => adatas::all(),
                'test' => DB::table('adatas')->orderBy('type','desc')->get(),
            ]);
        }
}
