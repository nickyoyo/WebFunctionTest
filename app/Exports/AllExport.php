<?php

namespace App\Exports;

use App\Models\adatas;
use App\Models\adatafinishes;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class AllExport implements FromView
{
        public function view(): View
        {
            return view('AFeature.AFeatureExportALL', [
                'testN' => DB::table('adatas')->orderBy('type','desc')->get(), 
                'testY' => DB::table('adatafinishes')->orderBy('type','desc')->get(), 
            ]);
        }
}
