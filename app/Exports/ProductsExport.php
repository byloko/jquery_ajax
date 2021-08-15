<?php

  

namespace App\Exports;

  

use App\ProductModel;

use Maatwebsite\Excel\Concerns\FromCollection;

  

class ProductsExport implements FromCollection

{

  
    public function collection()

    {

        return ProductModel::all();

    }

}


