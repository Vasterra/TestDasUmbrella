<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create_pdf($id) {
        $company = Company::find($id);

        $pdf = Pdf::loadView('pdf', ['company' => $company]);
        return $pdf->download($company->name.'.pdf');
    }

}
