<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Volunteer;
use App\Models\Delegation;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function avatarChangeForm()
    {
        return view('dashboard.changeAvatarForm');
    }

    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'file' => 'required|max:5120|image',
        ]);
        $filename = Auth::user()->nameVol . Auth::user()->surnameVol . Auth::user()->surname2Vol . substr(Auth::user()->numDocVol, 0, 4) . '.jpg';
        $request->file('file')->storeAs('avatar', $filename);
        $volunteer = Volunteer::find(Auth::user()->id)
            ->update(['imageVol' => $filename]);
        session()->flash('successUploadImage', 'Se ha subido el Avatar.');
        return redirect()->route('dashboard.changeAvatar');
    }

    public function showAllUsers()
    {
        $volunteers = Volunteer::select(
            'id',
            'nameVol',
            'surnameVol',
            'surname2Vol',
            'birthDateVol',
            'typeDocVol',
            'numDocVol',
            'telVol',
            'sexVol',
            'shirtSizeVol',
            'persMailVol',
            'corpMailVol',
            'typeViaVol',
            'direcVol',
            'numVol',
            'flatVol',
            'aditiInfoVol',
            'codPosVol',
            'stateVol',
            'townVol',
            'imageVol',
            'organiVol',
            /********/
            'isLoggeable',
            'isInternVol',
            'isRegisterComplete',
            /********/
            'nameAuthVol',
            'tlfAuthVol',
            'numDocAuthVol'
        )
            ->where('isAdminVol', '!=', "1")
            ->get();
        return view("dashboard.showAllUsers", compact("volunteers"));
    }

    public function showMyProfile()
    {
        $volunteer = Volunteer::select(
            'id',
            'nameVol',
            'surnameVol',
            'surname2Vol',
            'birthDateVol',
            'typeDocVol',
            'numDocVol',
            'telVol',
            'sexVol',
            'shirtSizeVol',
            'persMailVol',
            'corpMailVol',
            'typeViaVol',
            'direcVol',
            'numVol',
            'flatVol',
            'aditiInfoVol',
            'codPosVol',
            'stateVol',
            'townVol',
            'imageVol',
            'organiVol',
            /********/
            'isInternVol',
            /********/
            'nameAuthVol',
            'tlfAuthVol',
            'numDocAuthVol'
        )
            ->where('id', Auth::user()->id)
            ->first();

        $allDelegations = Delegation::all();
        return view('dashboard.showMyProfileForm', compact("volunteer", "allDelegations"));

    }

    public function banUser(Request $request)
    {
        $volunteer = Volunteer::select('id')
            ->where('id', $request['id'])
            ->update(['isLoggeable' => 0]);
        session()->flash('successUser', 'Se ha BLOQUEADO el USUARIO.');
        return redirect()->route('dashboard.showAllUsers');

    }

    public function unbanUser(Request $request)
    {
        $volunteer = Volunteer::select('id')
            ->where('id', $request['id'])
            ->update(['isLoggeable' => 1]);
        session()->flash('successUser', 'Se ha DESBLOQUEADO el USUARIO.');
        return redirect()->route('dashboard.showAllUsers');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'shirtSizeVol' => 'required',
            'organiVol' => 'required',
            'telVol' => 'required',
            'typeViaVol' => 'required',
            'direcVol' => 'required',
            'numVol' => 'required',
            'aditiInfoVol' => 'required',
            'codPosVol' => 'required',
            'stateVol' => 'required',
            'townVol' => 'required',
            // 'delegations' => 'required',
        ]);

        $volunteer = Volunteer::find(Auth::user()->id);
        if ($volunteer->delegations()->count() != 0) {
            $volunteer->delegations()->detach();
        }

        $volunteer->delegations()->attach($request->delegations);

        Auth::user()->update(
            [
                'shirtSizeVol' => $request->shirtSizeVol,
                'organiVol' => $request->organiVol,
                'telVol' => $request->telVol,
                'corpMailVol' => $request->corpMailVol,
                'typeViaVol' => $request->typeViaVol,
                'direcVol' => $request->direcVol,
                'numVol' => $request->numVol,
                'flatVol' => $request->flatVol,
                'aditiInfoVol' => $request->aditiInfoVol,
                'codPosVol' => $request->codPosVol,
                'stateVol' => $request->stateVol,
                'townVol' => $request->townVol
            ],
        );

        session()->flash('successUpdateUser', 'Se ha Actualizado el USUARIO.');
        return redirect()->route('dashboard.showMyProfile');
    }

    public static function showEachInterest($activity)
    {
        $interest = [];
        foreach ($activity as $getTypeAct) {
            foreach ($getTypeAct->typeAct as $typeAct) {
                array_push($interest, $typeAct->nameTypeAct);
            }
        }
        return array_unique($interest);
    }
}