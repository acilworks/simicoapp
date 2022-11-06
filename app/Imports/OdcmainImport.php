<?php

namespace App\Imports;

use Symfony\Component\HttpFoundation\Session\Session;

use App\Models\Odcmain;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class OdcmainImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = Auth::user()->name;
        // @dd($user);
        return new Odcmain([
            'name' => $row['name'],
            'sto' => $row['sto'],
            'segment_feeder_old' => $row['segment_feeder_old'],
            'segment_feeder_new' => $row['segment_feeder_new'],
            'lat' => $row['lat'],
            'long' => $row['long'],
            'address' => $row['address'],
            'koordinat' => $row['koordinat'],
            // 'info' => $row[9],
            'updated_by' => $user,
        ]);
       
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:odcmains',
            'sto' => 'required',
            'koordinat' => 'required',
            
        ];
    }


}
