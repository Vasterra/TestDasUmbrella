<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class CompaniesTable extends Component
{
    public $companies;

    public function mount() {
        $this->companies = Company::with('owner')->get();
    }

    public function render()
    {
        return view('livewire.companies-table');
    }
}
