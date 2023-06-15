<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Exports\VolunteerExport;
use App\Exports\VolunteerActivityExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class CSVController extends Controller
{
    public function getUsersCSV()
    {
        return Excel::download(new VolunteerExport, date('d-m-Y').'voluntarios.xlsx');
    }

    public function getUsersActivityCSV($activity_id, $nameAct)
    {
        return Excel::download(new VolunteerActivityExport($activity_id), date('d-m-Y').'_'.$nameAct.'_'.'lista_voluntarios.xlsx');
    }

}
