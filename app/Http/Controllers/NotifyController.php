<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Volunteer;
use App\Models\Document;
use App\Models\Inscription;
use App\Models\TypeActivity;

use DB;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function adminShowNotify()
    {
        $isNotCompleted=Volunteer::where('isRegisterComplete',0)
                                    ->where('isAdminVol',0)
                                    ->get();
                                    
        $inscriptionNotValidated=Inscription::where('filenameIns','!=', null)
                                            ->where('isCompletedIns', 0)
                                            ->get();
        return view("dashboard.showAdminNotifications", compact("isNotCompleted","inscriptionNotValidated"));

    }

    public static function notifyTrigger()
    {
        $isNotCompleted=Document::select('volunteer_id', DB::raw('SUM(isContactModelVol)') , DB::raw('SUM(isInscripModelVol)')) 
                                ->join('volunteer', 'documents.volunteer_id','=','volunteer.id')
                                ->groupBy('volunteer_id')
                                ->where('isAdminVol','=',0)
                                ->where('isRegisterComplete','=',0)
                                ->count();

        if($isNotCompleted>0){
            return true;
        }

        $inscriptionNotValidated=Inscription::where('filenameIns','!=', null)
                                            ->where('isCompletedIns', 0)
                                            ->count();               

        if($inscriptionNotValidated>0){
            return true;
        }

        /* Documentos */
        return false;
    }

}
