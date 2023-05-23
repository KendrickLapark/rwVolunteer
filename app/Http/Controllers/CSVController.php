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

    public function getUsersActivityCSV()
    {
        return Excel::download(new VolunteerActivityExport, date('d-m-Y').'voluntarios_activity.xlsx');
    }

}
