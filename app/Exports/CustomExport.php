<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\AfterSheet;

class CustomExport implements FromView
{
    public $view;
    public $data;

    public function __construct($view, $data = "")
    {
        $this->view = $view;
        $this->data = $data;
    }

    public function view(): View
    {
        return view(
            $this->view,
            $this->data
        );
    }

}
