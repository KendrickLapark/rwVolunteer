<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::create([
            'doc_id' => 1,
            'volunteer_id' => 1,
            'nameDoc' => 'modeloAcuerdoDeIncorporaRocioCieroReche',
            'titleDoc' => 'modeloAcuerdoDeIncorporaRocioCieroReche',
            'isContactModelVol' => 1,
            'isInscripModelVol' => 0,
        ]);

        Document::create([
            'doc_id' => 2,
            'volunteer_id' => 1,
            'nameDoc' => 'contratoDeVoluntariadoRocioCieroReche',
            'titleDoc' => 'contratoDeVoluntariadoRocioCieroReche',
            'isContactModelVol' => 0,
            'isInscripModelVol' => 1,
        ]);

        Document::create([
            'doc_id' => 3,
            'volunteer_id' => 2,
            'nameDoc' => 'modeloAcuerdoDeIncorporaAdmin',
            'titleDoc' => 'modeloAcuerdoDeIncorporaAdmin',
            'isContactModelVol' => 1,
            'isInscripModelVol' => 0,
        ]);
        Document::create([
            'doc_id' => 4,
            'volunteer_id' => 2,
            'nameDoc' => 'contratoDeVoluntariadoAdmin',
            'titleDoc' => 'contratoDeVoluntariadoAdmin',
            'isContactModelVol' => 0,
            'isInscripModelVol' => 1,
        ]);
    }
}
