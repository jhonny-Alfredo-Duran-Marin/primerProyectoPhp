<?php

namespace App\Imports;

use App\Models\Estudiante;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EstudiantesImport implements ToModel
 {
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model\null
    */
    public function model(array $row)
    {
     // Log::debug('Importing row', $row);
      
        return new Estudiante([
            'nombre' => $row[0],
            'registro' => $row[1],
            'carrera' => $row[2],
        ]);
    }


}
