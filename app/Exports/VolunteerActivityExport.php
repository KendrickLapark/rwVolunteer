<?php

namespace App\Exports;

use App\Models\Volunteer;
use App\Models\Inscription;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VolunteerActivityExport implements FromCollection, WithHeadings
{
    protected $filtro;

    public function __construct($filtro)
    {
        $this->filtro = $filtro;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $volunteers_ids = Inscription::select(
            DB::raw('volunteer_id'))
                ->whereRaw('activity_id = ?', [$this->filtro])->get()->toArray(); 
                
         $query = Volunteer::select( 
                    DB::raw("volunteer.nameVol ,
                            volunteer.surnameVol ,
                            volunteer.surname2Vol ,
                            volunteer.birthDateVol,
                            volunteer.typeDocVol ,
                            volunteer.numDocVol ,
                            volunteer.telVol,
                            volunteer.sexVol ,
                            volunteer.shirtSizeVol,
                            volunteer.password,
                            volunteer.persMailVol ,
                            volunteer.corpMailVol ,
                            volunteer.typeViaVol,
                            volunteer.direcVol,
                            volunteer.numVol,
                            volunteer.flatVol ,
                            volunteer.aditiInfoVol,
                            volunteer.codPosVol ,
                            volunteer.stateVol ,
                            volunteer.townVol ,
                            volunteer.organiVol ,
                            volunteer.nameAuthVol ,
                            volunteer.tlfAuthVol ,
                            volunteer.numDocAuthVol")
                ); 

                if (empty($volunteers_ids)) {
                    return collect([]);
                }

             foreach($volunteers_ids as $volunteers_id) {

                $query->orWhereRaw('id = ?', [$volunteers_id]);

            }

            $results = $query->get();

            return $results; 

    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function headings(): array

    {

        return [
                'Nombre' ,
                'Primer Apellido' ,
                'Segundo Apellido' ,
                'Fecha de Nacimiento',
                'Tipo de documento' ,
                'Documento' ,
                'Teléfono',
                'Sexo' ,
                'Talla de Camiseta',
                'Correo Personal' ,
                'Correo Corporativo' ,
                'Tipo de via',
                'Dirección',
                'Número',
                'Planta' ,
                'Información Adicional',
                'Código Postal' ,
                'Provincia' ,
                'Localidad' ,
                'Organización',
                'Nombre del Autorizador',
                'Teléfono del Autorizador',
                'Documento del Autorizador',
                'Intereses'
        ]; 
       
    }
}