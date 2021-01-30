<?php

namespace App\Http\Controllers;

use App\Exports\UserMultiSheetExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\UsersExport;

class UsersExportController extends Controller 
{
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export()
    {
        return $this->excel->download(new UserMultiSheetExport(2020), 'users.xlsx');
    }
}
