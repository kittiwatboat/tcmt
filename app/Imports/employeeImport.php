<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\tb_employeemodel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class employeeImport implements ToCollection, ToModel, WithStartRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
    public function model(array $row)
    {
        return new tb_employeemodel([
            'employee_ID'=>$row[0],
            'scan_code'=>$row[1],
            'first_name'=>$row[2],
            'last_name'=>$row[3],
            'job_No'=>$row[4],
            'WO_No'=>$row[5],
            'address'=>$row[6],
            'bank_No'=>$row[7],
            'bank'=>$row[8],
            'On_shift'=>$row[9],
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
