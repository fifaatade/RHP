<?php

namespace App\Http\Controllers;
use App\Models\Candidates;

use Barryvdh\DomPDF\Facade\Pdf;


class ExportController extends Controller
{
    public function export()
    {
        $candidates = Candidates::all();
        $data=$candidates->toArray();
        $pdf = Pdf::loadView('RevealHerPotential.tableau', compact('data','candidates'))->setOptions(['defaultFont' => 'sans-serif']);
        $pdf->setPaper('A1','landscape');

        return $pdf->download('selection.pdf');

    }
}
